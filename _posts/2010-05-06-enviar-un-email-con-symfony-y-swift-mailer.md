---
layout: post
title: "Enviar un email con Symfony y Swift Mailer"
description: "Como enviar un email desde una acción con Symfony 1.4 o 1.3"
locale: es
---

<strong>Symfony 1.4 </strong>o <strong>1.3</strong> esta integrado con <a href="http://swiftmailer.org/">Swift Mailer</a>, podemos enviar un email desde cualquier acción de la siguiente forma:

{% highlight php startinline %}
//Creamos el email
$mailer = Swift_Mailer::newInstance(Swift_MailTransport::newInstance());

//Creamos el mensaje
$message = Swift_Message::newInstance('Asunto')
  ->setFrom(array('usuario@prueba.com' => 'Nombre usuario'))
  ->setTo(array('destinatario@prueba.com' => 'Nombre destinatario'))
  ->setBody('Contenido del email')
;

//Enviamos el email
$mailer->send($message);
{% endhighlight %}
