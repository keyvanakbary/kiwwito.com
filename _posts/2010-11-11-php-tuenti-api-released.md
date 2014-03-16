---
layout: post
title: "PHP Tuenti API released"
description: "Released the first version of the PHP Tuenti API"
redirect_from: /article/php-tuenti-api-released/
locale: en
---

After an intensive week of development I'm glad to announce the first release of an **stable**, **documented** and **free** interface for connecting with the closed Tuenti API.

You can download and read more about the project in <a href="https://github.com/keyvanakbary/php-tuenti-api">the dedicated page that I have created for it</a>.

I don't know why Tuenti have never released a open solution for the developers community. For this reason I've developed a full PHP API Interface based on the smartphones apps.

Thanks to the popular hacking technic "<a href="/intercepting-net-traffic-with-dsniff/">man in the middle</a>" between my iPhone and my router and a helpful protocol analyzer tool (Wireshark) I finally discovered the communication protocol (through JSON) between server and app.

I must mention the awesome work of some <a href="http://scromega.net/7-accediendo-a-la-api-cerrada-de-tuenti.html">curious</a> that got the crypt algorithm for the login authentication request.