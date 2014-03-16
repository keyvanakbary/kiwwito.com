---
layout: post
title: "Restore GRUB2"
description: "How to restore GRUB 2 without if we cannot acess the partition"
redirect_from: /article/restore-grub2/
locale: en
---

If we made a new instalation of Windows or another operative system is possible that the MBR (boot charger, in our case, GRUB) be removed. For restore it first we have to charge another charger (in a CD for example, follow the steps <a href="/article/restore-grub">here</a>). For GRUB 2, the steps to follow are slighly different than for GRUB 1. For restore:

{% highlight bash %}
update-grub
grub-install /dev/sda
{% endhighlight %}
