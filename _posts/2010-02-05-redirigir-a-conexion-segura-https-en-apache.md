---
layout: post
title: "Redirigir a conexión segura https en Apache"
description: "Mediante unas sencillas reglas para el mod_rewrite de Apache podemos redirigir el acceso a ficheros o carpetas a una conexión segura https"
locale: es
---

Redirigir una solicitud de acceso a un determinado fichero o directorio, es tan sencillo como incluir las siguientes líneas al fichero Apache <strong>.htaccess</strong> en la raiz de nuestro directorio web:

{% highlight apache %}
RewriteCond %{SERVER_PORT} !^443$
RewriteCond %{REQUEST_URI} ^/fichero$
RewriteRule ^(.*)$ https://www.dominio.com/$1 [L,R]
{% endhighlight %}

Esto sencillamente redireccionará cualquier petición del fichero "fichero" (por ejemplo) mediante el protocolo HTTP (cualquier acceso por un puerto que no sea 443) a una URL HTTPS de la forma "https://www.dominio.com/fichero"
