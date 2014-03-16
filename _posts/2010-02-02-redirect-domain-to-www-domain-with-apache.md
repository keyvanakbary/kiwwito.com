---
layout: post
title: "Redirect \"domain\" to \"www.domain\" with Apache"
description: "Configure Apache files for redirect requests like \"domain\" to \"www.domain\""
redirect_from: /article/redirect-domain-to-www-domain-with-apache/
locale: en
---

Must create/modify the file <strong>.htaccess</strong> in the domain root directory wich also must have the following apache configuration lines:

{% highlight apache %}
RewriteEngine on
RewriteCond %{HTTP_HOST} ^domain\.com
RewriteRule ^(.*)$ http://www.domain.com/$1 [R=permanent,L]
{% endhighlight %}
