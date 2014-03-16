---
layout: post
title: "Configurar cache de ficheros desde Apache"
description: "Habilitar las directivas de cache desde el servidor Apache puede incrementar el rendimiento de forma sustancial"
redirect_from: /articulo/configurar-cache-de-ficheros-desde-apache/
locale: es
---

Para habilitar la cache de elementos en el lado del cliente solo necesitamos tener instalado el **mod_expires** en nuestro servidor **Apache**. Una vez instalado dicho módulo, especificar una cache por defecto para todos los elementos accesibles a nuestro servidor es tan sencillo como escribir la siguiente directiva en la configuración httpd de nuestro sitio (<em>.htaccess</em> o <em>httpd.conf</em>):

{% highlight apache %}
ExpiresActive On
ExpiresDefault "access plus 1 month"
{% endhighlight %}

<sub>* Especificamos expiración para todos los elementos de un més a partir de fecha de acceso.</sub>

 Probablemente una directiva mejor, orientada a imágenes, css y js (elementos más pesados de la web) según tipo de fichero:

{% highlight apache %}
ExpiresActive On
ExpiresByType image/gif "access plus 1 month"
ExpiresByType image/jpeg "access plus 1 month"
ExpiresByType image/png "access plus 1 month"
ExpiresByType text/css "access plus 24 hours"
ExpiresByType text/javascript "access plus 24 hours"
{% endhighlight %}
