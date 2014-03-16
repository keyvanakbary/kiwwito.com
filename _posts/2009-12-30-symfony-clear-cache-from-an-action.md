---
layout: post
title: "Symfony, clear cache from an action"
description: "Simply PHP function to remove the cache from an action"
locale: en
---

For application and environment clear cache: 

{% highlight php startinline %}
/**
 * Delete cache for application and environment
 *
 * @param string $app aplicación
 * @param string $env entorno
 */
function clear_cache ($app, $env)
{
  $cacheDir = sfConfig::get('sf_cache_dir').'/'. $app.'/'.$env.'/';

  //Clear cache
  $cache = new sfFileCache(array('cache_dir' => $cacheDir));
  $cache->clean();
}
{% endhighlight %}
