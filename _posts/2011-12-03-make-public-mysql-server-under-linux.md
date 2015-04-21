---
layout: post
title: "Make public MySQL server under Linux"
description: "How to make public your MySQL server over the Network"
redirect_from: /article/make-public-mysql-server-under-linux/
locale: en
---

For security reasons when you install into your Linux distro (Ubuntu, CentOS, etc.) a MySQL server, it is only accessible through the loopback or local environment. If you want to make it public in your network, you have to configure it first.

We have to edit your `/etc/my.conf` and add/edit the next lines:

{% highlight ini %}
[mysqld]
port = 3306
bind-address = 10.10.0.1
{% endhighlight %}

Don't forget to restart the daemon:

    sudo /etc/init.d/mysqld restart
