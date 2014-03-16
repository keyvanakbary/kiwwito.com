---
layout: post
title: "i18n in Twig extensions with Symfony 2"
description: "Add internationalization to Twig extensions in Symfony 2"
redirect_from: /article/i18n-in-twig-extensions-with-symfony-2/
locale: en
---

First of all we have to connect our Twig extension with the translation service. We have to configure the dependency injection container to do that.

Prepare the dependency injection container to load the configuration from an XML file

{% highlight php startinline %}
# Test/DemoBundle/DependencyInjection/TestDemoExtension.php

namespace Test\DemoBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\Config\FileLocator;

class TestDemoExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('twig.xml');
    }

    public function getAlias()
    {
        return 'test_demo';
    }
}

{% endhighlight %}

Connect the Twig extension engine with the translator service (create an XML config file Test/DemoBundle/Resources/config/twig.xml)

{% highlight xml %}
<?xml version="1.0" ?>
<container xmlns="http://symfony.com/schema/dic/services"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd">

    <services>
        <service id="twig.extension.test.demo" class="Test\DemoBundle\Twig\Extension\DemoExtension" public="false">
            <tag name="twig.extension" />
            <argument type="service" id="translator" />
        </service>
    </services>
</container>

{% endhighlight %}

Build the Twig extension with the translator as a parameter

{% highlight php startinline %}
# Test/DemoBundle/Twig/Extension/DemoExtension.php

namespace Test\DemoBundle\Twig\Extension;
use Symfony\Component\Translation\TranslatorInterface;

class DemoExtension extends \Twig_Extension
{
    protected $translator;

    /**
     * Constructor method
     *
     * @param TranslatorInterface $translator
     */
    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            'translate' => new \Twig_Function_Method($this, 'translate')
        );
    }

    /**
     * Dummy function, translates a text
     *
     * @return string
     */
    public function translate ($text)
    {
        return $this->translator->trans($text);
    }
}

{% endhighlight %}

And thats all! We can use our new i18n method into all of our DemoBundle Twig templates

{% highlight jinja %}
{{ translate('text') }}

{% endhighlight %}

Do not forget to activate the i18n in the app/config/config.yml

{% highlight yaml %}
framework:
    translator:      { fallback: %locale% }
{% endhighlight %}
