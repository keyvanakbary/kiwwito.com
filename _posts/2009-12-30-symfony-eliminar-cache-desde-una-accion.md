---
layout: post
title: "Symfony, eliminar cache desde una acción"
description: "Sencilla función PHP para poder eliminar la cache desde una acción"
locale: es
---

Para eliminar la cache de una aplicación y un entorno determinado: 

{% highlight php startinline %}
/**
 * Eliminar cache según aplicación y entorno
 *
 * @param string $app aplicación
 * @param string $env entorno
 */
function clear_cache ($app, $env)
{
  $cacheDir = sfConfig::get('sf_cache_dir').'/'. $app.'/'.$env.'/';

  //Eliminamos la cache
  $cache = new sfFileCache(array('cache_dir' => $cacheDir));
  $cache->clean();
}
{% endhighlight %}
