---
layout: post
title: "Como saber bits Linux"
description: "Como conocer la arquitectura de nuestro Sistema Operativo linux (32 o 64 bits)"
locale: es
---

A veces es útil saber que arquitectura sigue nuestro Linux, por ejemplo, puede que hayamos instalado una versión de 32 bits en un computador de 64 bits.
Para saber si nuestra distribución es de 64 o 32 bits basta con ejecutar el siguiente comando:


    uname -m

Si la respuesta es"x86_64" nuestro Linux es 64 bits, en caso contrario (i686) será de 32 bits.