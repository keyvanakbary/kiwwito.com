---
layout: post
title: "Minificar ficheros CSS y JS con Assetic y Symfony2"
description: "Como unificar y minificar ficheros CSS y JS con Assetic y Symfony2"
redirect_from: /articulo/minificar-ficheros-css-y-js-con-assetic-y-symfony2/
locale: es
---

Unificar todos nuestros CSS o JS en ficheros únicos y además minificarlos optimiza el rendimiento de la página.

Gracias a Assetic, bundle preinstalado por defecto en la distribución estándar de Symfony2, podemos hacerlo on-the-fly en entorno de desarrollo. También genera los ficheros adecuados para producción.

En primer lugar deberemos <a href="http://yuilibrary.com/download/yuicompressor/" target="_blank">descargar el compresor YUI</a>, descomprimirlo y copiar el "yuicompressor-*.jar" en la carpeta "app/Resources/java/".

Conectamos Assetic con el compresor (fichero config.yml):

{% highlight yaml %}
assetic:
    filters:
        yui_css:
            jar: "%kernel.root_dir%/Resources/java/yuicompressor.jar"
        yui_js:
            jar: "%kernel.root_dir%/Resources/java/yuicompressor.jar"
{% endhighlight %}

Ya podemos minificar y unificar nuestros assets CSS y JS. La forma de hacerlo es introduciendo en nuestro template Twig de nuestro layout base (por ejemplo) el siguiente código:

{% highlight jinja %}
{{ "{%" }} stylesheets filter='?yui_css' output='css/compiled-main.css'
    '@MyBundle/Resources/public/css/*'
%}
{% endhighlight %}

Assetic compilará todos los ficheros CSS de nuestro bundle en un único fichero CSS minificado.

En el entorno de desarrollo se generará este fichero por cada vez que se haga una petición a la página. Para el entorno de producción deberemos generar este fichero con el siguiente comando:


    php app/console assetic:dump --env=dev --no-debug
