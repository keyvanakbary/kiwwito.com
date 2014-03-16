---
layout: post
title: "Apache .htaccess permission denied"
description: "How to resolve the access to a non existent .htaccess"
redirect_from: /article/apache-htaccess-permission-denied/
locale: en
---

If we choose another DocumentRoot location for any host configuration you must ensure that Apache have full access from the root to the destiny if not your browser will prompt a "Permission denied" and in the log file you can find a message like "<strong>Permission denied: NO_ACCESIBLE_DIR/.htaccess pcfg_openfile: unable to check htaccess file, ensure it is readable</strong>"

We can solve this problem setting a correct access permissions from the root to the destiny path. For example if we have a non accesible or a **DocumentRoot** "**/var/www**" problem we can solve it setting a "**/var**" and "**/var/www**" **755** permissions:
{% highlight bash %}
chmod 755 /srv
chmod 755 /srv/www
{% endhighlight %}
