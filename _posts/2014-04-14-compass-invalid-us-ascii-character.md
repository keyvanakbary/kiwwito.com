---
layout: post
title: "Compass invalid US-ASCII character"
description: "To fix this error you just need to add one single line at the top of your config.rb file"
locale: en
---

To fix this error you just need to add one single line at the top of your `config.rb` file

{% highlight ruby %}
Encoding.default_external = "utf-8"
{% endhighlight %}