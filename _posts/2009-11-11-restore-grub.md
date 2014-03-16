---
layout: post
title: "Restore GRUB"
description: "How to restore GRUB without problems"
locale: en
---

### First step, burn into a CD the Super Grub Disk ISO
It's necessary use the command line for restoring Grub, a good option is download a automatic boot loader that can recognize our linux installation. After downloading the iso, we have to burn it into a CD:
<a href="http://www.supergrubdisk.org/index.php?pid=5" target="_blank">Download Super Grub Disk ISO cd-rom image</a>


### Init linux with Super Grub Disk
Insert the burned cd and select it like an option in the boot. When Super Grub Disk starts (in the boot) select **GNU/Linux**, now it will launch our linux distro.


### Restoring Grub
Once you enter linux, execute into the command line and with root privileges:

    grub

In the Grub, we search where is it real location:

    grub> find /boot/grub/stage2

With the info hdx,y displayed (for example: (hd0,4)) we are going to install Grub:
{% highlight bash %}
grub> root (hdx,y)
grub> setup (hdx)
{% endhighlight %}

Exit Grub, the next time you reboot your system, it will be installed.


    grub> quit
