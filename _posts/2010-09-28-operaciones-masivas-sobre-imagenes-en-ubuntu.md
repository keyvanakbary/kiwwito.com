---
layout: post
title: "Operaciones masivas sobre imágenes en Ubuntu"
description: "Gracias a ImageMagick y la línea de comandos podemos ejecutar operaciones sobre imágenes de forma masiva"
redirect_from: /articulo/operaciones-masivas-sobre-imagenes-en-ubuntu/
locale: es
---

<a href="http://www.imagemagick.org/">ImageMagick</a> es una colección de librerías para editar, convertir, componer, guardar imágenes en otros formatos (más de 100), transformar, rotar, escalar, ajustar el color, aplicar efectos y muchas cosas...

Esta disponible para múltiples plataformas: <a href="http://www.imagemagick.org/script/binary-releases.php#windows">Windows</a>, <a href="http://www.imagemagick.org/script/binary-releases.php#unix">Linux</a> y Mac.
Su utilidad radica en poder realizar operaciones sobre imágenes de una forma cómoda y limpia a través de la línea de comandos. Gracias a que admite expresiones regulares podemos operar sobre múltiples imágenes con una única instrucción.

Es muy útil, por ejemplo, reducir la calidad de imagen al 80% de todas las imágenes JPG de un cierto directorio para reducir su peso:

    mogrify -quality 80 *.jpg

O reescalarlas todas a una determinada resolución:

    mogrify -resize 800x600 *.jpg
