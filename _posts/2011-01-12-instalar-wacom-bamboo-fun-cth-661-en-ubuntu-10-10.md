---
layout: post
title: "Instalar Wacom Bamboo Fun CTH-661 en  Ubuntu 10.10"
description: "Instalar Wacom Bamboo Fun en Ubuntu 10.10 Maverik Merkaat"
redirect_from: /articulo/instalar-wacom-bamboo-fun-cth-661-en-ubuntu-10-10/
locale: es
---

Por problemas con el driver de <a href="http://linuxwacom.sourceforge.net/">Wacom para Linux</a>, algunas tabletas modernas como el modelo **Bamboo Fun (CTH-661)** no funcionan correctamente en <strong>Ubuntu 10.10 Maverick Merkaat</strong>.

Gracias a <a href="https://launchpad.net/~irie">Irie Shinsuke</a> podemos instalarlo de una forma cómoda y rápida, solo tenemos que ir al termina (**Aplicaciones > Accesorios > Terminal**) e introducir los siguientes comandos:

{% highlight bash %}
sudo add-apt-repository ppa:irie/wacom
sudo apt-get update
sudo apt-get install xserver-xorg-input-wacom
sudo apt-get install wacom-dkms
{% endhighlight %}

¡Reiniciamos y listo!
