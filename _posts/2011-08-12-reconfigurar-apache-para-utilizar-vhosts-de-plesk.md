---
layout: post
title: "Reconfigurar Apache para utilizar vhosts de Plesk"
description: "Como reconfigurar el servidor Apache para que utilice la configuración Plesk"
redirect_from: /articulo/reconfigurar-apache-para-utilizar-vhosts-de-plesk/
locale: es
---

Algunas veces la configuración Apache se restablece o borra cuando realizamos una actualización mayor a Plesk.
Para reconfigurar nuestro servidor Apache de una forma cómoda solo tenemos que ejecutar el siguiente comando desde la consola:

    /usr/local/psa/admin/sbin/httpdmng --reconfigure-all