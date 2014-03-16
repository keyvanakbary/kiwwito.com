---
layout: post
title: "Add third party libraries to Symfony 2"
description: "How to add third party libraries to our Symfony 2 project"
redirect_from: /article/add-third-party-libraries-to-symfony-2/
locale: en
---

Adding libraries that follows the PHP 5.3.+ with namespaces is trivial, but how we can add an old PHP library without namespaces?

For example, if we want to add a library like <a href="http://qbnz.com/highlighter/" target="_blank">GeSHi</a> which haves an old style format (lower than 5.3.+), not follows the standards and it not have namespaces, we have to do a little trick.

As the Symfony 2 standard says, we have to store all the external libraries into the /vendor folder. In order to force GeSHi to load like the <a href="http://groups.google.com/group/php-standards/web/psr-0-final-proposal?pli=1" target="_blank">PSR-0</a> standard (fact standard for autoloading in Symfony 2) we must create the following directory structure:

    /vendor/geshi/lib/Geshi/src

And store there the GeSHi lib.

Now we have to make an special class to load GeSHi (class which inherits from real GeSHi class):

{% highlight php startinline %}
# vendor/geshi/lib/Geshi/Geshi.php

require_once __DIR__.'/src/geshi.php';

class Geshi_Geshi extends GeSHi {
}
{% endhighlight %}

Now we can add safety the GeSHi lib to the autoloader:

{% highlight php startinline %}
# app/autoload.php

$loader->registerPrefixes(array(
    'Geshi_' => __DIR__.'/../vendor/geshi/lib',
));
{% endhighlight %}

Finally we can use it everywhere in our Symfony 2 project:

{% highlight php startinline %}
$geshi = new \Geshi_Geshi ();
{% endhighlight %}
