---
layout: post
title: "Install Wacom Bamboo Fun CTH-661 in Ubuntu 10.10"
description: "Install Wacom Bamboo Fun in Ubuntu 10.10 Maverick Merkaat"
locale: en
---

For problems with the <a href="http://linuxwacom.sourceforge.net/">Wacom driver for Linux</a> some of Wacom tablets like the **Bamboo Fun (CTH-661)** model does not function correctly under Ubuntu 10.10 Maverik Merkaat.

Thanks to <a href="https://launchpad.net/~irie">Irie Shinsuke</a> we can install the drivers through simple steps. We only have to enter the next commands into the Terminal (**Applications > Accessories > Terminal**):

{% highlight bash %}
sudo add-apt-repository ppa:irie/wacom
sudo apt-get update
sudo apt-get install xserver-xorg-input-wacom
sudo apt-get install wacom-dkms
{% endhighlight %}

Reboot and have fun!
