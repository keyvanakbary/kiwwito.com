---
layout: post
title: "Incrustar imágenes, css y javascript en HTML"
description: "Usando la URI de tipo \"data\" en la ruta de imágenes, css y javascript podemos incrustarlos en código HTML "
redirect_from: /articulo/incrustar-imagenes-css-y-javascript-en-html/
locale: es
---

El formato de la ruta a imágenes, CSS y javascript no tiene porque ser externo. Utilizando el tipo "**data**" podemos incrustar el elemento directamente en el código HTML. Un ejemplo de esto es: 

{% highlight html %}
<img alt="Imagen incrustada" src="data:image/png;base64,iVBORw0KGg<div>oAAAANSUhEUgAAADIA..." />
{% endhighlight %}

O CSS:
{% highlight css %}
div.image {
  width:100px;
  height:100px;
  background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIA...);
}
{% endhighlight %}

La única complicación de este método es que los datos se han de codifificar en "**base64**". Una solución cómoda para este mismo ejemplo en **PHP** es:
{% highlight html %}
<img alt="Imagen incrustada" src="data:image/jpeg;base64,<?php echo base64_encode(file_get_contents('imagen.jpg'))?>"/>
{% endhighlight %}

También puedes utilizar alguna de las <a href="http://www.greywyvern.com/code/php/binary2base64">herramientas online</a> disponibles para éste proposito. 

 Cuando se crea un documento HTML, sabemos que la estructura perdurará en el tiempo, pero ¿y los objetos externos?. Cuando no es posible garantizar su existencia a veces es conveniente incrustarlos para que perduren.