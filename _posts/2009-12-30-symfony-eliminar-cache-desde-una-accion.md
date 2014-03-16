---
layout: post
title: "Symfony, eliminar cache desde una acción"
description: "Sencilla función PHP para poder eliminar la cache desde una acción"
redirect_from: /articulo/symfony-eliminar-cache-desde-una-accion/
locale: es
---

Para eliminar la cache de una aplicación y un entorno determinado:

{% highlight php startinline %}
/**
 * @param string $app
 * @param string $env
 */
function clear_cache ($app, $env) {
  $cacheDir = sfConfig::get('sf_cache_dir').'/'. $app.'/'.$env.'/';
  $cache = new sfFileCache(array('cache_dir' => $cacheDir));
  $cache->clean();
}
{% endhighlight %}
