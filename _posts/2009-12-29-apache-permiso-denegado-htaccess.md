---
layout: post
title: "Apache, permiso denegado .htaccess"
description: "Como resolver problema de acceso a un .htaccess no existente"
locale: es
---

Si establecemos la ruta a un servidor virtual fuera de la típica "**/var/www/vhosts**", debemos asegurarnos de apache puede acceder desde la raiz hasta la carpeta destino. Si apache no puede acceder a alguna carpeta entre la raiz y destino, podremos observar en los logs de apache algo como "<strong>Permission denied: CARPETA_NO_ACCESIBLE/.htaccess pcfg_openfile: unable to check htaccess file, ensure it is readable</strong>".

Para solucionarlo basta con dar permisos **755** a todas las carpetas por las que va a pasar Apache hasta llegar al destino. Si en la configuración de un servidor tenemos como **DocumentRoot** "**/srv/www**" basta con que "**/srv**" y "**/srv/www**" tengan permisos **755**:

{% highlight bash %}
chmod 755 /srv
chmod 755 /srv/www
{% endhighlight %}
