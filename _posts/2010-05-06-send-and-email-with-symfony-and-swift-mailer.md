---
layout: post
title: "Send and Email with Symfony and Swift Mailer"
description: "How to send an email from an action with Symfony 1.4 or 1.3"
redirect_from: /article/send-and-email-with-symfony-and-swift-mailer/
locale: en
---

**Symfony 1.x** comes integrated with [Swift Mailer](http://swiftmailer.org/), we can send an email from every action with the next code

{% highlight php startinline %}
//Mail creation
$mailer = Swift_Mailer::newInstance(Swift_MailTransport::newInstance());

//Message creation
$message = Swift_Message::newInstance('Subject')
    ->setFrom(array('user@test.com' => 'Username'))
    ->setTo(array('to@test.com' => 'Receiver name'))
    ->setBody('Email content');

//Send the email
$mailer->send($message);
{% endhighlight %}
