---
layout: post
title: "Fixtures in Symfony 2"
description: "How to create fixtures in our Symfony 2 project"
redirect_from: /article/fixtures-in-symfony-2/
locale: en
---

The fixtures is a data configuration for our Symfony 2 project, is a simple but a powerful way to load into the database default or required information for the correct execution of the application. Often, in the development phase, the model changes or even dropped, as the recovery comes tedious the fixtures can save us hours of manual SQL insertions.

To install a Doctrine 2 fixtures system in our Symfony 2 app, we have to add the next lines to the "deps" file.

{% highlight ini %}
[doctrine-fixtures]
    git=http://github.com/doctrine/data-fixtures.git

[DoctrineFixturesBundle]
    git=http://github.com/symfony/DoctrineFixturesBundle.git
    target=/bundles/Symfony/Bundle/DoctrineFixturesBundle
{% endhighlight %}

Installation:

    bin/vendors install

We have to activate it in the app/autoload.php:
{% highlight php startinline %}
$loader->registerNamespaces(array(
    // ...
    'Doctrine\\Common\\DataFixtures' => __DIR__.'/../vendor/doctrine-fixtures/lib',
    'Doctrine\\Common' => __DIR__.'/../vendor/doctrine-common/lib',
    // ...
));
{% endhighlight %}

And in the app/AppKernel.php:
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

Generally, we also have to create a fixture file per entity defined in the model. We can create a fixture to load the default admin users of our app:

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

Finally, in order to load the fixtures configuration, we have to execute the next command:

    php app/console doctrine:fixtures:load