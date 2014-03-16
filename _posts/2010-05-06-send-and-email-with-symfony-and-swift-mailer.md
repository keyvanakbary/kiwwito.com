---
layout: post
title: "Send and Email with Symfony and Swift Mailer"
description: "How to send an email from an action with Symfony 1.4 or 1.3"
locale: en
---

<strong>Symfony 1.4</strong> or <strong>1.3</strong> comes integrated with <a href="http://swiftmailer.org/">Swift Mailer</a>, we can send an email from every action with the next code:

{% highlight php startinline %}
//Mail creation
$mailer = Swift_Mailer::newInstance(Swift_MailTransport::newInstance());

//Message creation
$message = Swift_Message::newInstance('Subject')
  ->setFrom(array('user@test.com' => 'Username'))
  ->setTo(array('to@test.com' => 'Receiver name'))
  ->setBody('Email content')
;

//Send the email
$mailer->send($message);
{% endhighlight %}
