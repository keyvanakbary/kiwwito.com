---
layout: post
title: "Restaurar GRUB2"
description: "Como restaurar GRUB 2 si no tenemos acceso a la partición"
redirect_from: /articulo/restaurar-grub2/
locale: es
---

Si hacemos una instalción nueva de Windows o cualquier otro sistema operativo es posible que machaque el contenido de cargador de arranque (en nuestro caso GRUB). Para restaurarlo es necesario cargar un cargador de arranque externo (por ejemplo en un CD, podemos seguir las indicaciones [aquí](/restaurar-grub/). Para GRUB 2 los pasos a seguir para su restauración son diferentes que para GRUB 1. Para restaurarlo, ejecuta:

    update-grub
    grub-install /dev/sda