---
layout: post
title: "Symfony 2 route redirection"
description: "Redirect route for Symfony 2 router"
locale: en
---

Redirect from a route to another with a 301 status code is as easy as

{% highlight yaml %}
route:
    pattern: /
    defaults: { _controller: FrameworkBundle:Redirect:redirect, route: redirect_to, permanent: true }

redirect_to:
    pattern: /redirect
    defaults: { _controller: Bundle:Controller:action }
{% endhighlight %}

That means, when you enter root you'll be redirected to /redirect