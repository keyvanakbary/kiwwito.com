---
layout: post
title: "Redirigir \"dominio\" a \"www.dominio\" con Apache"
description: "Configurar ficheros Apache para redirigir peticiones del tipo \"domino\" a \"www.dominio\""
redirect_from: /articulo/redirigir-dominio-a-www-dominio-con-apache/
locale: es
---

Se debe crear/modificar el fichero `.htaccess` en la raiz del dominio que al menos debe contener las siguientes líneas de código:

{% highlight apache %}
RewriteEngine on
RewriteCond %{HTTP_HOST} ^dominio\.com
RewriteRule ^(.*)$ http://www.dominio.com/$1 [R=permanent,L]
{% endhighlight %}
