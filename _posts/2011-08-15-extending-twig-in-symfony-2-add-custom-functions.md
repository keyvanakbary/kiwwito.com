---
layout: post
title: "Extending Twig in Symfony 2, add custom functions"
description: "How to add functions to Twig in Symfony 2"
redirect_from: /article/extending-twig-in-symfony-2-add-custom-functions/
locale: en
---

Sometimes we need to add some custom functions to the view. In Symfony 1 we have the helpers, in Symfony 2 we must extend Twig in order to add it.

At first, we have to connect our future Twig extension to the Dependency Injection Container in our Bundle. If we don't got any config file we have to create it.

{% highlight php startinline %}
# Test/MyBundle/DependencyInjection/MyBundleExtension.php

namespace Test\MyBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\Config\FileLocator;

class TestMyBundleExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('twig.xml');
    }

    public function getAlias()
    {
        return 'test_my_bundle';
    }
}
{% endhighlight %}

At this point we have to configure what kind of service we will offer, the parameters that it will require and how is going to be connected to the kernel (file Test/MyBundle/Resources/config/twig.xml):

{% highlight xml %}
<?xml version="1.0" ?>

<container xmlns="http://symfony.com/schema/dic/services"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd">

    <services>
        <service id="twig.extension.ka.blog" class="Test\MyBundle\Twig\Extension\BlogExtension" public="false">
            <tag name="twig.extension" />
        </service>
    </services>
</container>
{% endhighlight %}

Once done, the last step is to extend Twig with an Extension. In this case we will add a simple function that transforms a string into a Unix timpestamp:

{% highlight php startinline %}
# Test/MyBundle/Twig/Extension/MyBundleExtension.php

namespace Test\MyBundle\Twig\Extension;

use Symfony\Component\HttpKernel\KernelInterface;

class MyBundleExtension extends \Twig_Extension
{
    public function __construct()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            'totime' => new \Twig_Function_Method($this, 'toTime')
        );
    }

    /**
     * Converts a string to time
     *
     * @param string $string
     * @return int
     */
    public function toTime ($string)
    {
        return strtotime($string);
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'my_bundle';
    }
}
{% endhighlight %}

Thats all! To use it under your templates you only have to enter:

{% highlight jinja %}
{% raw %}
{{ totime(strtime) }}
{% endraw %}
{% endhighlight %}
