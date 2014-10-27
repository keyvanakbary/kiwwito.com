---
layout: post
title: How to fix remanent characters when tab completing with ZSH
description: How to fix remanent characters when tab completing with ZSH
locale: en
---

If you are using a ZSH shell like [oh-my-zsh](https://github.com/robbyrussell/oh-my-zsh) and you try to tab completing a word and you get some annoying remanent characters like

    $ cd
    $ cdcd

And you cannot remove some of them is because you have some issues with UTF8 configuration.

You could try if this solution works

{% highlight bash %}
export LC_ALL=en_US.UTF-8
{% endhighlight %}

If it does, make it permanent

{% highlight bash %}
echo "export LC_ALL=en_US.UTF-8" >> .zshrc
{% endhighlight %}