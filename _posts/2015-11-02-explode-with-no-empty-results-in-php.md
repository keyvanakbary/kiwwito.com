---
layout: post
title: Explode with no empty results in PHP
description: If you've used the explode function in PHP probably you've noticed unexpected empty results...
locale: en
---

If you've used the [explode](http://php.net/manual/es/function.explode.php) function in PHP probably you've noticed unexpected empty results

{% highlight php startinline %}
$string = '';
explode(',', '');
// array(0 => '')
{% endhighlight %}

This could be fixed by using the function [preg_split](http://php.net/manual/es/function.preg-split.php)

{% highlight php startinline %}
$string = '';
preg_split('/,/', $string, null, PREG_SPLIT_NO_EMPTY))
// array()
{% endhighlight %}

