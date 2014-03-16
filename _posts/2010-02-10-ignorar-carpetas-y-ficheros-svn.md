---
layout: post
title: "Ignorar carpetas y ficheros SVN"
description: "Mediante el uso de propiedades (propedit) podemos ignorar ficheros y directorios"
locale: es
---

Ignorar directorios o ficheros es realmente sencillo con subversion (SVN), el comando para ello es el siguiente:


    svn propedit svn:ignore ./CARPETA_O_FICHERO_A_IGNORAR

A continuación se abrirá nuestro editor por defecto para introducir los ficheros que debe ignorar; podemos hacer uso de expresiones regulares y ignorar todos los ficheros:


    *

o podemos ignorar ficheros específicos:

{% highlight bash %}
*_dev.php
*.jpg
{% endhighlight %}
