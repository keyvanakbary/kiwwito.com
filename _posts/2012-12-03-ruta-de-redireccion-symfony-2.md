---
layout: post
title: "Ruta de redirección Symfony 2"
description: "Ruta de redirección para router de Symfony 2"
redirect_from: /articulo/ruta-de-redireccion-symfony-2/
locale: es
---

Redireccionar de una ruta a otra con un status code de 301

{% highlight yaml %}
route:
    pattern: /
    defaults: { _controller: FrameworkBundle:Redirect:redirect, route: redirect_to, permanent: true }

redirect_to:
    pattern: /redirect
    defaults: { _controller: Bundle:Controller:action }
{% endhighlight %}

Cuando el usuario vaya a la raiz será redireccionado a /redirect