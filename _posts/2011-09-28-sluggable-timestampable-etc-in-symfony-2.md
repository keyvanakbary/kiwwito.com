---
layout: post
title: "Sluggable, Timestampable, etc. in Symfony 2"
description: "Doctrine 2 behaviours under Symfony 2: Sluggable, Translatable, Timestampable, Loggable and Tree"
locale: en
---

In Symfony 2, we can attach this useful behaviours to our model through doctrine extensions. One bundle, <a href="https://github.com/stof/StofDoctrineExtensionsBundle">DoctrineExtensionsBundle</a>, offers a lot of them: <a href="https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/sluggable.md">Sluggable</a>, <a href="https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/translatable.md">Translatable</a>, <a href="https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/timestampable.md">Timestampable</a>, <a href="https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/loggable.md">Loggable</a> y <a href="https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/tree.md">Tree</a>.

The above extensions allow, among other things, to transform usual strings into friendly ones, great for URLs (Sluggable), database i18n support (Translatable), entities tracking and versioning (Loggable), create and update datetime autofill fields (Timestampable) and native database tree structure (Tree).

### Installation
At first, we have to install Doctrine extensions and its Symfony Bundle integration. Add the next lines to the "deps" file:

{% highlight ini %}
[gedmo-doctrine-extensions]
    git=git://github.com/l3pp4rd/DoctrineExtensions.git

[DoctrineExtensionsBundle]
    git=git://github.com/stof/StofDoctrineExtensionsBundle.git
    target=/bundles/Stof/DoctrineExtensionsBundle

{% endhighlight %}

Install

{% highlight bash %}
$ bin/vendors install

{% endhighlight %}

Add the next lines to the app/autoload.php file:

{% highlight php startinline %}
$loader->registerNamespaces(array(
    // ...
    'Stof'  => __DIR__.'/../vendor/bundles',
    'Gedmo' => __DIR__.'/../vendor/gedmo-doctrine-extensions/lib',
    // ...
));

{% endhighlight %}

And the following bundle to app/AppKernel.php:

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

Once done, configure it at app/config/config.yml (add the listeners, more info and options at <a href="https://github.com/stof/StofDoctrineExtensionsBundle/blob/master/Resources/doc/index.rst">StofDoctrineExtensions</a>)

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

Do not forget to clear the cache


    $ php app/console cache:clear

### Usage example
One example entity with the Sluggable and Timestampable behaviours activated could be:

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

You can get more examples and info going to the next links: <a href="https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/sluggable.md">Sluggable</a>, <a href="https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/translatable.md">Translatable</a>, <a href="https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/timestampable.md">Timestampable</a>, <a href="https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/loggable.md">Loggable</a> and <a href="https://github.com/l3pp4rd/DoctrineExtensions/blob/master/doc/tree.md">Tree</a>.