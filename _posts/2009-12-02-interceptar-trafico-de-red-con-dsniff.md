---
layout: post
title: "Interceptar tráfico de red con dsniff"
description: "Mediante el uso de algunas herramientas, podemos interceptar el tráfico de nuestra red local mediante unos sencillos pasos"
redirect_from: /articulo/interceptar-trafico-de-red-con-dsniff/
locale: es
---

### Un poco de teoría
La tabla ARP de nuestro computador funciona a modo de caché para acceder de forma rápida a direcciones IP que visitemos con frecuencia, normalmente el router será la única entrada cacheada que tengamos en dicha tabla dado que es este el que encamina nuestros paquetes IP hacia internet (hacia afuera).
El router se auto-descubre en nuestra red con una señal que provoca que todos los equipos que pertenezcan a dicha red agregen de forma automática una entrada en su cache ARP para acceder así a internet.
La peligrosidad de esta accion por defecto es que cualquier equipo puede hacerse pasar por router, esto es, convertirse en el que encamine nuestros paquetes IP de la red a la que pertenezca. Un router obviamente no analizará los paquetes IP pero un computador malicioso podría desencapsular los diferentes niveles de IP y extraer información no autorizada.

### Que debemos saber
**Dirección ip del router:** La dirección IP del router en la red local al que estamos conectados nosotros y la víctima (router que encamina habitualmente hacia internet).
**Dirección ip de la víctima:** La dirección IP de la víctima en red local a la cual queremos envenenar su tabla ARP.

**Solo podremos efectuar el ataque si estamos en la misma red** que router y víctima de forma local.

### El ataque:
Suponiendo que tengamos un equipo con linux y dsniff instalados, habilitamos encaminamiento en el núcleo del sistema:

    sysctl -w net.ipv4.ip_forward=1

Creamos dos procesos distintos para establecer una conexión entre dos computadores y nosotros:

    arpspoof -i eth0 DIR_IP_ROUTER -t DIR_IP_VÍCTIMA

    arpspoof -i eth0 DIR_IP_VÍCTIMA -t DIR_IP_ROUTER

Ahora podemos ejecutar tranquilamente **Wireshark** (Analizador de paquetes) y observar cual es el contenido de los paquetes entre víctima y router.
Dado que ésta técnica es exactamente lo que se denomina un *man in the middle* (estamos en medio del router y la víctima), no solo se puede averigüar información de los paquetes, sino que se pueden falsificar comunicaciónes seguras como HTTPS o SSH (habría que emular el servidor y comunicar la petición hacia internet).

### Como evitarlo:
Necesitamos saber la dirección hardware del router (MAC), para ello podemos consultar nuestra propia tabla arp y buscar en ella mediante la dirección del router nuestra dirección hardware.

    arp

Una vez obtenida, añadimos una entrada de caracter permanente (que tendrá prioridad sobre la cacheada temporalmente):

    arp -s DIR_IP_ROUTER DIR_HW_ROUTER
