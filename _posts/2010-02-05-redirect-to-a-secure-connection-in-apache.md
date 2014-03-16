---
layout: post
title: "Redirect to a secure connection in Apache"
description: "Through simple rules for the mod_rewrite of Apache we can redirect file o directory access to a secure connection https"
redirect_from: /article/redirect-to-a-secure-connection-in-apache/
locale: en
---

Redirect the request for a file or directory is easy as include the following lines into the web root `.htaccess` Apache file:

{% highlight apache %}
RewriteCond %{SERVER_PORT} !^443$
RewriteCond %{REQUEST_URI} ^/file$
RewriteRule ^(.*)$ https://www.example.com/$1 [L,R]
{% endhighlight %}

This will redirect every request for the file "file" (for example) with HTTP protocol (any wich the access port different from 443) to another HTTPS secure URL similary to "https://www.example.com/file".