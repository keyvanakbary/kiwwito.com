---
layout: post
title: "Hamachi, partidas no visibles en red local"
description: "Como solucionar el problema de partidas invisibles con Hamachi"
redirect_from: /articulo/hamachi-partidas-no-visibles-en-red-local/
locale: es
---

Windows prioriza el acceso a las recursos de red, esto es, **si hamachi no tiene la prioridad suficiente para acceder a la red, no será capaz de sincronizar con el resto de integrantes de tu red virtual** en hamachi y ello provocará que, aunque paradógicamente puedas ver, realizar ping, examinar e incluso chatear con tus compañeros, no puedas ver las partidas que se creen en red local o las que tu mismo crees no sean accesibles por el resto de miembros. Incrementar la prioridad de hamachi respecto a los recursos de red es muy sencillo.

Accedemos desde el "**Panel de control**" a "**Conexiones de red**" y  una vez dentro, elegimos del menu superior, la opcion de "**Opciones avanzadas**" y seguidamente "**Configuración avanzada**":

![Selecciona Configuración Avanzada]({{ site.url }}/assets/posts/select-advanced-network-configuration.jpg)

Ahora simplemente selecciona de la lista que aparece a "**Hamachi**" y sube a éste en la lista mediante el boton de la derecha con el dibujo de flecha hacia arriba. Probablemente tengas que reiniciar para asegurar los cambios.

![Configuración Avanzada]({{ site.url }}/assets/posts/advanced-network-configuration.jpg)