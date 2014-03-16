---
layout: post
title: "Sluggable, Timestampable, etc. en Symfony 2"
description: "Comportamientos Doctrine 2 en Symfony 2: Sluggable, Translatable, Timestampable, Loggable y Tree"
redirect_from: /articulo/sluggable-timestampable-etc-en-symfony-2/
locale: es
---

En Symfony 2, podemos incluir estos útiles comportamientos a nuestro modelo mediante extensiones. Un bundle en particular, <a href="https://github.com/stof/StofDoctrineExtensionsBundle">DoctrineExtensionsBundle</a>, nos ofrece todos ellos: <a href="https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/sluggable.md">Sluggable</a>, <a href="https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/translatable.md">Translatable</a>, <a href="https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/timestampable.md">Timestampable</a>, <a href="https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/loggable.md">Loggable</a> y <a href="https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/tree.md">Tree</a>.

A grandes rasgos, las extensiones antes mencionadas permiten entre otras cosas definir cadenas de texto amigables ideales para las URL (Sluggable), soporte a la i18n en la base de datos (Translatable), versionado de entidades y tracking de cambios sobre estas (Loggable), autorelleno de campos de creación y actualización (Timestampable), y estructura nativa de árbol en la base de datos (Tree).

### Instalación
Primero debemos instalar las extensiones para doctrine y el bundle de integración. Añadimos las siguientes líneas a nuestro fichero "deps":

{% highlight ini %}
[gedmo-doctrine-extensions]
    git=git://github.com/l3pp4rd/DoctrineExtensions.git

[DoctrineExtensionsBundle]
    git=git://github.com/stof/StofDoctrineExtensionsBundle.git
    target=/bundles/Stof/DoctrineExtensionsBundle

{% endhighlight %}

Instalamos

{% highlight bash %}
$ bin/vendors install

{% endhighlight %}

Incorporamos las siguientes líneas al app/autoload.php

{% highlight php startinline %}
$loader->registerNamespaces(array(
    // ...
    'Stof'  => __DIR__.'/../vendor/bundles',
    'Gedmo' => __DIR__.'/../vendor/gedmo-doctrine-extensions/lib',
    // ...
));

{% endhighlight %}

Incorporamos el siguiente bundle al app/AppKernel.php

{% highlight php startinline %}
public function registerBundles()
{
    return array(
        // ...
        new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
        // ...
    );
}

{% endhighlight %}

Configuramos el app/config/config.yml (donde activaremos los listeners que necesitamos, mas información en <a href="https://github.com/stof/StofDoctrineExtensionsBundle/blob/master/Resources/doc/index.rst">StofDoctrineExtensions</a>)

{% highlight yaml %}
#...
doctrine:
    orm:
        auto_mapping: true

stof_doctrine_extensions:
    orm:
        default:
            sluggable: true
#...

{% endhighlight %}

No nos olvidemos de limpiar la cache


    $ php app/console cache:clear

### Ejemplo de uso
Una entidad de ejemplo con los comportamientos Sluggable y Timestampable podría ser:

{% highlight php startinline %}

namespace Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="article")
 * @ORM\Entity
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(length=64)
     */
    private $title;

    /**
     * @Gedmo\Slug(fields={"title"})
     * @ORM\Column(length=128, unique=true)
     */
    private $slug;

    /**
     * @var datetime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="date")
     */
    private $created;

    /**
     * @var datetime $updated
     *
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    private $updated;

    public function getId()
    {
        return $this->id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function getUpdated()
    {
        return $this->updated;
    }
}
{% endhighlight %}

Puedes obtener mas ejemplos e información en los enlaces: <a href="https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/sluggable.md">Sluggable</a>, <a href="https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/translatable.md">Translatable</a>, <a href="https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/timestampable.md">Timestampable</a>, <a href="https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/loggable.md">Loggable</a> y <a href="https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/tree.md">Tree</a>.