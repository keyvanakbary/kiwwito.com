---
layout: post
title: "Configuración host Linux Nginx Symfony 2"
description: "Configuración host Nginx para Symfony 2 en Linux"
locale: es
---

Suponiendo que el nombre del servidor será "example.local" y la raiz del proyecto Symfony 2 esta localizado en "/var/www/vhosts/example.local/" la configuración para Nginx será:

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
