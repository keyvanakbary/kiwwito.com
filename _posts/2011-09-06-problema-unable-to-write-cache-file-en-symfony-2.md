---
layout: post
title: "Problema \"Unable to write cache file\" en Symfony 2"
description: "Como configurar permisos de escritura correctos para los directorios cache/ y logs/ en Symfony 2"
redirect_from: /articulo/problema-unable-to-write-cache-file-en-symfony-2/
locale: es
---

Un problema habitual en un proyecto Symfony es que los directorios "app/cache" y "app/logs" deben tener permisos de escritura tanto para el usuario del servidor web como para el de la línea de comandos. En un sistema UNIX, si el usuario web es diferente al de la línea de comandos puedes ejecutar los siguientes comandos para configurar tu proyecto correctamente. Cambia "www-data" por el usuario del servidor web y "yourname" por el nombre de usuario de línea de comandos.

### 1. Usar ACL en un sistema que soporta chmod +a
Muchos sistemas permiten el uso del comando "chmod +a". Intentalo primero, si falla prueba con el paso siguiente:

    rm -rf app/cache/*
    rm -rf app/logs/*


    sudo chmod +a "www-data allow delete,write,append,file_inherit,directory_inherit" app/cache app/logs
    sudo chmod +a "yourname allow delete,write,append,file_inherit,directory_inherit" app/cache app/logs

### 2. Usar ACL en un sistema que no soporta chmod +a
Algunos sistemas no soportan "chmod +a", pero si una utilidad llamada "settfacl". En primer lugar debes <a href="https://help.ubuntu.com/community/FilePermissions#ACLs">habilitar ACL</a> en tu partición e instalar posteriormente "setfacl". Los comandos a ejecutar son:

    sudo setfacl -R -m u:www-data:rwx -m u:yourname:rwx app/cache app/logs
    sudo setfacl -dR -m u:www-data:rwx -m u:yourname:rwx app/cache app/logs

### 3. Sin ACL
Si no tienes tienes permisos para modificar el ACL de los directorios puedes incluir el comando "umask" en la cabecera de los ficheros "app/console", "web/app.php" y "web/app_dev.php":

{% highlight php startinline %}
umask(0002); // This will let the permissions be 0775

// or

umask(0000); // This will let the permissions be 0777
{% endhighlight %}