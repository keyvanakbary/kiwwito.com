---
layout: post
title: "Hacer público servidor MySQL en Linux"
description: "Como hacer público tu servidor MySQL en la red"
redirect_from: /articulo/hacer-publico-servidor-mysql-en-linux/
locale: es
---

Por seguridad, al instalar el servidor MySQL bajo una distribución Linux (Ubuntu, CentOS, etc.) únicamente se habilita en nuestro local (loopback). Si queremos habilitar nuestro servidor de forma pública a la red debemos habilitar el puerto y configurar correctamente el servidor.

Para ello solo debemos editar el fichero "/etc/my.conf" y añadir/modificar las siguientes líneas del fichero:

{% highlight ini %}
[mysqld]
port = 3306
bind-address = 10.10.0.1
# skip-networking
{% endhighlight %}

No olvideis reiniciar el demonio:

    sudo /etc/init.d/mysqld restart
