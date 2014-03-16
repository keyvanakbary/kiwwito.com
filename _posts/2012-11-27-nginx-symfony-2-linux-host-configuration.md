---
layout: post
title: "Nginx Symfony 2 Linux host configuration"
description: "Nginx Symfony 2 host configuration for Linux"
redirect_from: /article/nginx-symfony-2-linux-host-configuration/
locale: en
---

If the server name is going to be "example.local" and the root of the Symfony 2 project is at "/var/www/vhosts/example.local/" the Nginx configuration should be:

{% highlight nginx %}
server {
  listen 80;

  server_name example.local;

  root /var/www/vhosts/example.local/web;

  error_log /var/log/nginx/example.local.error.log;
  access_log /var/log/nginx/example.local.access.log;

  # strip app.php/ prefix if it is present
  rewrite ^/app\.php/?(.*)$ /$1 permanent;

  location / {
    index app.php;
    try_files $uri @rewriteapp;
  }

  location @rewriteapp {
    rewrite ^(.*)$ /app.php/$1 last;
  }

  # pass the PHP scripts to FastCGI server listening on 127.0.0.1:9000
  location ~ ^/(app|app_dev)\.php(/|$) {
    fastcgi_pass   unix:/var/run/php5-fpm.sock;
    fastcgi_split_path_info ^(.+\.php)(/.*)$;
    include fastcgi_params;
    fastcgi_param  SCRIPT_FILENAME    $document_root$fastcgi_script_name;
    fastcgi_param  HTTPS              off;
  }
}
{% endhighlight %}
