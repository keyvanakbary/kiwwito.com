---
layout: post
title: "Restaurar GRUB"
description: "Como restaurar GRUB de una forma sencilla y cómoda"
redirect_from: /articulo/restaurar-grub/
locale: es
---

### Primer paso, grabar la ISO de Super Grub Disk
Es necesario utilizar la consola para restaurar Grub, una buena opción es descargar un cargador de arranque automático  en cd que si nos reconozca nuestra instalación de linux. Descargamos la ISO y la grabamos en un CD virgen.
<a href="http://www.supergrubdisk.org/index.php?pid=5" target="_blank">Descargar imagen cd-rom Super Grub Disk</a>

### Iniciar linux con Super Grub Disk
Introducimos el cd y lo seleccionamos como opción de arranque en el boot del sistema. Cuando se arranque Super Grub Disk (en el arranque), seleccionamos **GNU/Linux**, asi iniciará nuestra distribución como antes.


### Restaurando Grub
Una vez dentro de linux, ejecutamos en la consola como administrador grub:

    grub

Dentro del Grub, buscamos en que partición se encuentra:

    grub> find /boot/grub/stage2

Con los datos que nos hayan salido hdx,y (por ejemplo: (hd0,4)) instalamos grub:
{% highlight bash %}
grub> root (hdx,y)
grub> setup (hdx)
{% endhighlight %}

Salimos de Grub y la próxima vez que reiniciemos lo tendremos instalado

    grub> quit
