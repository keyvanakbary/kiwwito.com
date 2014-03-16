---
layout: post
title: "Instalar Google Chrome en Ubuntu 11.10"
description: "Cómo instalar Google Chrome en Ubuntu 11.10"
locale: es
---

Algunas de las librerías que se incluían por defecto en la distribución de Ubuntu 11.04 ya no figuran en la nueva 11.10  (Oneiric Ocelot). Si tratas de instalar de forma manual el .deb de Chrome para Ubuntu te dirá que no puedes abrir el fichero. El problema real es que faltan librerías fundamentales para su ejecución (dependencias no resueltas).

Una vez <a href="http://www.google.com/chrome/eula.html">descargado el paquete</a> hay que instalarlo de forma manual a través de la terminal mediante el siguiente comando (importante, sustituir "file_name" por el nombre del fichero):


    sudo dpkg -i file_name.deb

El problema es que no se podrá debido al fallo de dependencias no instaladas, para solucionarlo:


    sudo apt-get -f install

Eso es todo.
