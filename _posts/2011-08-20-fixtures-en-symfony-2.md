---
layout: post
title: "Fixtures en Symfony 2"
description: "Como crear fixtures en nuestro proyecto Symfony 2"
redirect_from: /articulo/fixtures-en-symfony-2/
locale: es
---

Los fixtures son una configuración de datos para nuestro proyecto Symfony 2, una buena forma de precargar información en nuestra base de datos de forma semi-automática. Es habitual que en el transcurso del desarrollo de una aplicación se restablezcan una y otra vez la información contenida en nuestra base de datos, la utilidad del mecanismo de los fixtures es la reinserción bajo demanda de los datos necesarios para la correcta ejecución de esta (pej: usuarios).

Para instalar el sistema de fixtures de Doctrine 2, debemos añadir las siguientes líneas al fichero "deps":

{% highlight ini %}
[doctrine-fixtures]
    git=http://github.com/doctrine/data-fixtures.git

[DoctrineFixturesBundle]
    git=http://github.com/symfony/DoctrineFixturesBundle.git
    target=/bundles/Symfony/Bundle/DoctrineFixturesBundle

{% endhighlight %}

E instalarlo por consola:

    bin/vendors install

Activamos el bundle en el app/autoload.php:
{% highlight php startinline %}
$loader->registerNamespaces(array(
    // ...
    'Doctrine\\Common\\DataFixtures' => __DIR__.'/../vendor/doctrine-fixtures/lib',
    'Doctrine\\Common' => __DIR__.'/../vendor/doctrine-common/lib',
    // ...
));
{% endhighlight %}

Y en el app/AppKernel.php:
{% highlight php startinline %}
public function registerBundles()
{
    $bundles = array(
        // ...
        new Symfony\Bundle\DoctrineFixturesBundle\DoctrineFixturesBundle(),
        // ...
    );
    // ...
}
{% endhighlight %}

Por lo general crearemos un fichero de carga por cada entidad del modelo, así pues, un fixture de ejemplo para la carga de usuarios de prueba en el sistema podría ser:
{% highlight php startinline %}
# Test/MyBundle/DataFixtures/ORM/LoadUserData.php

namespace Test\MyBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use Test\MyBundle\Entity\User;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * Main method for fixtures insertion
     *
     * @param Doctrine\Manager $manager
     */
    public function load($manager)
    {
        //Save the user
        $user = new User();
        $user->setUsername('admin');
        $user->setPassword('admin');
        $user->setLastLogin(new \DateTime('now'));
        $user->setCreatedAt(new \DateTime('now'));
        $user->setUpdatedAt(new \DateTime('now'));
        $user->setIsActive(true);
        $user->setRoleName(User::ROLE_SUPER_ADMIN);
        $manager->persist($user);
        $manager->flush();

        //Associate a reference for other fixtures
        $this->addReference('user-admin', $user);
    }

    /**
     * Get the order of this execution
     *
     * @return int
     */
    public function getOrder()
    {
        return 1;
    }
}
{% endhighlight %}

La carga de datos en la base de datos se produce bajo demanda, es necesario ejecutar la siguiente tarea:

    php app/console doctrine:fixtures:load