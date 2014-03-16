---
layout: post
title: "Acortar URL's mediante API j.mp o bit.ly con PHP"
description: "Como acortar URL's mediante el API de j.mp o bit.ly con una sencilla funcion PHP y cURL"
redirect_from: /articulo/acortar-url-s-mediante-api-j-mp-o-bit-ly-con-php/
locale: es
---

Primero, para utilizar el API de bit.ly, debes <a href="http://j.mp/account/register">registrarte</a> y <a href="http://bit.ly/account/your_api_key">obtener una clave de api</a>. Una vez hecho esto, mediante cURL podemos acortar una URL llamando a la siguiente sencilla función PHP:

{% highlight php startinline %}
function acortarUrl ($url)
{
  $usuarioBitly = 'PRUEBA';
  $claveAPI = 'CLAVE_API';

  $ch = curl_init();

  //Opciones curl
  curl_setopt($ch, CURLOPT_URL, 'http://api.j.mp/v3/shorten?login=' . $usuarioBitly . '&apiKey=' . $claveAPI .'&uri=' . htmlspecialchars($url) . '&format=txt');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  //Ejecución
  $ret = curl_exec($ch);
  curl_close($ch);
  return $ret;
}
{% endhighlight %}
