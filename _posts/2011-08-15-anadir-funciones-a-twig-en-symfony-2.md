---
layout: post
title: "Añadir funciones a Twig en Symfony 2"
description: "Como añadir funciones a Twig en Symfony 2"
redirect_from: /articulo/anadir-funciones-a-twig-en-symfony-2/
locale: es
---

Muchas veces en la plantilla necesitamos funciones específicas que no vienen incluidas en el framework. En Symfony 1 teníamos los helpers, pero en Symfony 2 la vía que nos queda es la de extender la funcionalidad básica de Twig.

En primer lugar debemos conectar nuestra futura extensión Twig con el Contenedor de Inyección de Dependencias de nuestro Bundle. Si no tenemos configuración para el contenedor deberemos crear el fichero.

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

Debemos configurar correctamente que clase de servicio pretendemos ofrecer, que parámetros pasar a nuestra extensión y como ha de estar conectado al núcleo (fichero Test/MyBundle/Resources/config/twig.xml):

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

Ahora solo tenemos que extender Twig, esto lo haremos creando una simple extensión que por ejemplo añade una función que transforma una cadena de tiempo en un timestampable de Unix:

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

Eso es todo, ahora para utilizar nuestra nueva función en las plantillas Twig solo tenemos que invocar la función totime():

{% highlight jinja %}
{{ totime(strtime) }}
{% endhighlight %}
