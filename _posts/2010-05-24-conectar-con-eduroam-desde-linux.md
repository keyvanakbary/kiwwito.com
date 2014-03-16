---
layout: post
title: "Conectar con \"eduroam\" desde Linux"
description: "Como conectarse con la red wireless \"eduroam\" desde Linux (Ubuntu)"
redirect_from: /articulo/conectar-con-eduroam-desde-linux/
locale: es
---

**Eduroam** es una iniciativa de TERENA que facilita la movilidad de los investigadores y los estudiantes europeos, ofreciendo conectividad 'wifi' en sus desplazamientos al resto de instituciones que estén adheridas. De esta manera, los usuarios de las instituciones que participan en Eduroam tienen acceso en Internet a través de las redes sin hilos del resto de instituciones participantes [<a href="http://www.xtec.cat/eduroam/cast/">fuente</a>].

Para configurar la conexión desde Linux (en este tutorial, desde Ubuntu 10.04) necesitaremos tener instalado Network Manager (instalado por defecto en todas las distribuciones Ubuntu) y seguir unos sencillos pasos.

Abrimos "Conexiones de red".

O podemos introducir en consola "nm-connection-editor" (Ubuntu 10.04) o network-manager (Ubuntu < 10.04)

![Eduroam Add Network]({{ site.url }}/assets/posts/eduroam-add-network.png)

Seleccionamos la pestaña "Inalámbrica" y pulsamos sobre el botón "Añadir".

![Eduroam Configuration]({{ site.url }}/assets/posts/eduroam-configuration.png)

En la pestaña "Inalámbrica" insertamos en campo SSID el valor "**eduroam**".

![Eduroam Configuration]({{ site.url }}/assets/posts/eduroam-security.png)

En la pestaña "**Seguridad inalámbrica**", en "**Seguridad**" seleccionamos "**WPA2 enterprise**", en "**Autenticación**" seleccionamos "**TLS a través de tunel**", en "**Identidad anónima**" no insertamos nada, en "**Certificado CA**" ninguno, "**Autenticación interna**" seleccionamos "**PAP**" y en "**Usuario**" y "**Contraseña**", los habituales para acceder a los servicios de tu universidad (normalmente alumno@universidad.com).

En este punto y habiendonos conectado previamente ya podemos acceder a la red a través de "eduroam".
