---
layout: post
title: "LESS CSS con Assetic y Symfony 2"
description: "Añade filtro LESS para tus CSS con Assetic y Symfony 2"
redirect_from: /articulo/less-css-con-assetic-y-symfony-2/
locale: es
---

<a href="http://lesscss.org/" target="_blank">LESS</a> añade a CSS comportamiento dinámico añadiendo variables, mixins, operaciones y funciones.

Para el filtro LESS en nuestra configuración para Assetic, debemos tener instalado primero <a href="http://nodejs.org/" target="_blank">node.js</a>, el gestor de paquetes npm y la librería LESS.

### Instalar LESS, node.js y npm en Ubuntu
En Ubuntu puedes instalarlo todo de una manera cómoda desde la terminal:

{% highlight bash %}
sudo apt-get install nodejs-dev nodejs npm

{% endhighlight %}

Instalar la liberaría LESS para node:

{% highlight bash %}
npm install less

{% endhighlight %}

### Configurar Assetic para utilizar LESS
En Ubuntu, la biblioteca LESS se habrá instalado en una carpeta oculta en nuestro home. De no ser así, habrá que localizarla correctamente para su funcionamiento con Assetic. Para configurarlo, añadir la siguiente línea a nuestro "app/config/config.yml".

{% highlight yaml %}
assetic:
    filters:
        less:
            node: /usr/bin/node
            node_paths: [/home/USER/.node_libraries]
{% endhighlight %}

Donde "USER" será nuestro usuario.

### Uso
Para integrarlo con nuestra aplicación solo tendremos que añadir las siguientes líneas a nuestro documento base:

{% highlight jinja %}
{{ "{%" }} stylesheets filter='less' output='css/compiled-main.css'
    '@MyBundle/Resources/public/less/*'
%}
   <link href="{{ asset_url }}" type="text/css" rel="stylesheet" media="all" />
{{ "{%" }} endstylesheets %}
{% endhighlight %}

Combinará todos los ficheros LESS que cuelguen de la carpeta less de nuestro Bundle en un único fichero CSS "compiled-main.css".

En el entorno de desarrollo se generarán los ficheros de forma dinámica por cada petición, para el entorno de producción hay que generarlos de forma manual:

    php app/console assetic:dump --env=dev --no-debug

Este filtro se puede combinar con cualquier otro, como por ejemplo <a href="/articulo/minificar-ficheros-css-y-js-con-assetic-y-symfony2" target="_blank">el filtro de compresión YUI para Assetic</a>.
