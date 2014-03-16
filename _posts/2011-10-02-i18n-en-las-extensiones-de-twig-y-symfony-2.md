---
layout: post
title: "i18n en las extensiones de Twig y Symfony 2"
description: "Añadir internacionalización a nuestras extensiones Twig en Symfony 2"
locale: es
---

En primer lugar debemos conectar nuestra extensión Twig con el servicio de traducción. Debemos configurar el contenedor de inyección de dependencias para que lo haga.

Preparamos al inyector de dependencias para que cargue la configuración de un fichero XML

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

Configuramos la conexión entre nuestra extensión Twig y el servicio de traducción (creamos el fichero de configuración Test/DemoBundle/Resources/config/twig.xml)

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

Creamos la extensión de Twig contando con el servicio de traducción como parámetro en el constructor de clase (que será introducido por el inyector de dependencias)

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

¡Y eso es todo! Ahora podemos utilizar nuestra nueva función de traducción en cualquier plantilla del Bundle DemoBundle

{% highlight jinja %}
{{ translate('text') }}

{% endhighlight %}

No te olvides de activar la i18n en app/config/config.yml

{% highlight yaml %}
framework:
    translator:      { fallback: %locale% }
{% endhighlight %}
