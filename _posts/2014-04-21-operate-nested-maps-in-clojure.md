---
layout: post
title: Operate Nested Maps in Clojure
description: How to set, update, add or remove elements in Clojure maps
locale: en
---

## Set/Update/Add Items
{% highlight clojure %}
(assoc-in {:a {:b {:c 1 :d 2}}} [:a :b :c] 3)
;=> {:a {:b {:c 3 :d 2}}}
{% endhighlight %}

## Remove Items
{% highlight clojure %}
(update-in {:a {:b {:c 1 :d 2}}} [:a :b] dissoc :c)
;=> {:a {:b {:d 2}}}
{% endhighlight %}