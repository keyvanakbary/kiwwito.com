---
layout: post
title: "Crear un tema para symfony admin generator"
description: "Podemos personalizar el admin generator de symfony con un tema"
redirect_from: /articulo/crear-un-tema-para-symfony-admin-generator/
locale: es
---

Crear un tema para el **admin generator** de Symfony desde cero es extremadamente complicado, es mucho mas fácil copiar el por defecto y personalizarlo a nuestro gusto. Para ello se puede seguir una serie de pasos:

### Crea una estructura de directorios
Crea en el directorio "data" de tu proyecto la carpeta "generator" y dentro de esta otra carpeta más que se llame "sfPropelModule".

### Copia el tema por defecto de symfony para el admin generator
Vete a la raíz donde tengas instalado Symfony (puedes saberlo ejecutando el comando "symfony -V") y copia la carpeta "**/lib/plugins/sfPropelPlugin/data/generator/sfPropelModule/admin**" dentro del directorio creado en el primer paso ("**/data/generator/sfPropelModule/**").

El nombre del tema será "admin" si quieres cambiarlo, cambia el nombre de la carpeta al que tu quieras.

### Personaliza a tu gusto
Ahora las plantillas copiadas se encontrarán en "**/data/generator/sfPropelModule/NOMBRE_TEMA/template/templates**" solo tienes que modificarlas a tu gusto.

### Establece el tema en generator.yml
Para que el admin generator de Symfony seleccione dicho tema, es necesario que lo indiques en el fichero <strong>generator.yml</strong> (dentro del "**config/**" de tu módulo) con el atributo "theme" del siguiente modo:

{% highlight yaml %}
generator:
  param:
    ...
    theme:NOMBRE_TEMA
    ...
{% endhighlight %}
