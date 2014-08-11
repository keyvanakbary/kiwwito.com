---
layout: post
title: "Extending Twig in Symfony 2, add custom functions"
description: "How to add functions to Twig in Symfony 2"
redirect_from: /article/extending-twig-in-symfony-2-add-custom-functions/
locale: en
---

Sometimes we want helping functions in the view. In Symfony 1 we had helpers, in Symfony 2 we need to add custom Twig extensions in order to add new ones.

First, we need to add our extension to the container. If we don't have the dependecy loading file we need to create it first at `Test/MyBundle/DependencyInjection/MyBundleExtension.php`.

{% highlight php startinline %}
namespace Test\MyBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\Config\FileLocator;

class TestMyBundleExtension extends Extension {
    public function load(array $configs, ContainerBuilder $container) {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');
    }

    public function getAlias() {
        return 'test_my_bundle';
    }
}
{% endhighlight %}

We need to create a simple service definition at `Test/MyBundle/Resources/config/services.xml`:

{% highlight xml %}
<?xml version="1.0" ?>
<container xmlns="http://symfony.com/schema/dic/services"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd">
    <services>
        <service id="to_time_extension" class="Test\MyBundle\Twig\Extension\ToTimeExtension" public="false">
            <tag name="twig.extension" />
        </service>
    </services>
</container>
{% endhighlight %}

Once done, the last step is to extend Twig with an Extension. In this case we will add a simple function that transforms a string into a Unix timpestamp:

Finally we have to create our extension at `Test/MyBundle/Twig/Extension/ToTimeExtension.php`

{% highlight php startinline %}
namespace Test\MyBundle\Twig\Extension;

use Symfony\Component\HttpKernel\KernelInterface;

class ToTimeExtension extends \Twig_Extension {
    /**
     * {@inheritdoc}
     */
    public function getFunctions() {
        return array(
            'totime' => new \Twig_Function_Method($this, 'toTime')
        );
    }

    /**
     * @param string $string
     * @return int
     */
    public function toTime ($string) {
        return strtotime($string);
    }

    /**
     * {@inheritdoc}
     */
    public function getName() {
        return 'my_bundle';
    }
}
{% endhighlight %}

Thats all! To use it under your templates you only have to enter:

{% highlight jinja %}
{% raw %}
{{ totime('now') }}
{% endraw %}
{% endhighlight %}
