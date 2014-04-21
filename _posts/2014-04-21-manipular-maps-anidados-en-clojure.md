---
layout: post
title: Manipular maps anidados en Clojure
description: Como añadir, actualizar o eliminar elementos en los maps de Clojure
locale: es
---

## Añadir/Actualizar elementos
{% highlight clojure %}
(assoc-in {:a {:b {:c 1 :d 2}}} [:a :b :c] 3)
;=> {:a {:b {:c 3 :d 2}}}
{% endhighlight %}

## Eliminar elementos
{% highlight clojure %}
(update-in {:a {:b {:c 1 :d 2}}} [:a :b] dissoc :c)
;=> {:a {:b {:d 2}}}
{% endhighlight %}