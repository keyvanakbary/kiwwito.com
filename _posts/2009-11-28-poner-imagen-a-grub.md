---
layout: post
title: "Poner imagen a GRUB"
description: "Para mejorar la experiencia de usuario, nada mejor que poner una imágen personalizada"
redirect_from: /articulo/poner-imagen-a-grub/
locale: es
---

Cambiar o poner una imágen a GRUB es casi trivial. Para ello necesitamos dos herramientas instaladas en nuestro entorno linux:

**Convert:** Herramienta para conversion de imágenes a diferentes formatos, tamaños, etc.

**Startupmanager:** Gestión gráfica de opciones de configuración GRUB.

### Elige la imágen
Busca la imágen que desees para poner de fondo en GRUB. No es necesario que tenga un formato específico o que tenga un determinado tamaño o profundiad de color.

### Convierte la imágen a un formato compatible con GRUB
Las imágenes que pueden aparecer en GRUB deben tener un formato, tamaño y profundidad de color específicos. Para transformar la imágen a una compatible, ejecuta el siguiente comando sobre la imágen que hayas elegido:


    convert imagen.jpg -resize 640x480! -colors 14 -depth 8 imagen.xpm.gz

### Configuramos GRUB con nueva imágen
Una vez que tengamos la imágen preparada, debemos establecerla como imágen de fondo para GRUB mediante el programa de configuración de GRUB startupmanager.