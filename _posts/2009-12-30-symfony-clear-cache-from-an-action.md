---
layout: post
title: "Symfony, clear cache from an action"
description: "Simply PHP function to remove the cache from an action"
redirect_from: /article/symfony-clear-cache-from-an-action/
locale: en
---

For application and environment clear cache:

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
