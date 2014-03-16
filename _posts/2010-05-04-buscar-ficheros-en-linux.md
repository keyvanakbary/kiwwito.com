---
layout: post
title: "Buscar ficheros en Linux"
description: "Como buscar ficheros en nuestro sistema Linux con el comando \"find\""
redirect_from: /articulo/buscar-ficheros-en-linux/
locale: es
---

Buscar ficheros en nuestro sistema Linux no puede ser mas fácil. Utilizando el comando "find" podemos encontrar cualquier coincidencia con un cierto patrón especificado. Así si queremos buscar un fichero con nombre "FICHERO" en la carpeta actual de trabajo utilizaremos el siguiente comando en la consola:


    $ find -name FICHERO

También es posible utilizar expresiones tipo glob (expresiones regulares) para encontrar patrones coincidentes:


    $ find -name *.pdf

La búsqueda es recursiva, esto es, buscará también dentro de las subcarpetas que se encuentren dentro del directorio de trabajo, asi pues, para buscar dentro de todo el disco duro (y sin problema de permisos):


    # find / -name FICHERO
