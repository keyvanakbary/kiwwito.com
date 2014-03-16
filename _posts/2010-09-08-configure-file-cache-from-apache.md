---
layout: post
title: "Configure file cache from Apache"
description: "Activate cache directives from Apache server can improve the loading perfornance"
locale: en
---

To enable items cache in the client side only, you only need to have installed on your **Apache** server the **mod_expires** module. Once installed, specify a default cache for all elements accessed by our server is as easy as typing the following directive in the httpd configuration of our site (<em>.htaccess</em> or <em>httpd.conf</em>):

{% highlight apache %}
ExpiresActive On
ExpiresDefault "access plus 1 month"
{% endhighlight %}

<sub>* One month expiration since the access for all elements.</sub>

 Probably, a better directive for heavy web elements like images, CSS's and JS's based on the filetype:

{% highlight apache %}
ExpiresActive On
ExpiresByType image/gif "access plus 1 month"
ExpiresByType image/jpeg "access plus 1 month"
ExpiresByType image/png "access plus 1 month"
ExpiresByType text/css "access plus 24 hours"
ExpiresByType text/javascript "access plus 24 hours"
{% endhighlight %}
