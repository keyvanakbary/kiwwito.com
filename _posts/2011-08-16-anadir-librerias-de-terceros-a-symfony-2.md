---
layout: post
title: "Añadir librerias de terceros a Symfony 2"
description: "Como añadir librerías de terceros sin a nuestro proyecto Symfony 2"
locale: es
---

Añadir librerías creadas directamente en la versión 5.3.+ de PHP en Symfony formateadas con namespaces es trivial, pero ¿y si queremos añadir una librería antigua sin namespaces?

Por ejemplo, para añadir una librería como GeSHi cuyo formato es anterior a la versión 5.3.+ de PHP y que no sigue a rajatabla los estándares, necesitaremos hacer un pequeño truco.

Como manda el estándar, cualquier librería externa ha de alojarse en nuestra carpeta /vendor. Para forzar a que <a href="http://qbnz.com/highlighter/" target="_blank">GeSHi</a> se cargue con el estandar <a href="http://groups.google.com/group/php-standards/web/psr-0-final-proposal?pli=1" target="_blank">PSR-0</a> (estándar autoloader de Symfony 2) deberemos crear la siguiente estructura de directorios:


    /vendor/geshi/lib/Geshi/src

Y almacenar en src directamente la librería GeSHi.

Ahora haremos una clase especial para el autoloader que extenderá directamente de nuestra librería principal geshi.php:

{% highlight php startinline %}
# vendor/geshi/lib/Geshi/Geshi.php

require_once __DIR__.'/src/geshi.php';

class Geshi_Geshi extends GeSHi {
}
{% endhighlight %}

Ahora podemos incluir de forma sencilla GeSHi en nuestro autoloader

{% highlight php startinline %}
# app/autoload.php

$loader->registerPrefixes(array(
    'Geshi_' => __DIR__.'/../vendor/geshi/lib',
));

{% endhighlight %}

E incluirlo en cualquier clase de nuestro proyecto donde nos haga falta:

{% highlight php startinline %}
$geshi = new \Geshi_Geshi ();
{% endhighlight %}
