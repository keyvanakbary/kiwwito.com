---
layout: post
title: "Compartir ficheros en red con Linux y NFS"
description: "Compartir ficheros en red mediante el protocolo NFS en Linux"
locale: es
---

Una forma sencilla de compartir ficheros en red entre máquinas Linux es utilizando el protocolo **NFS** (Network File System).
 
 Únicamente necesitas saber las direcciones IP de los equipos e instalar el según corresponda el servidor y/o cliente NFS.
 
 Como cualquier sistema cliente-servidor, un computador se comportará como el servidor de ficheros (sirve el/los ficheros en red para quien decida conectarse a el/ellos) y el resto se comportará como cliente de este sistema (quien quiera recibir dichos ficheros).

### Servidor de ficheros:
El **ordenador A** con dirección IP <strong>192.168.1.4</strong> desea compartir la carpeta "**/home/usuario/Público**" en red para que cualquiera pueda leer y escribir en ella.
 
 El procedimiento para compartir la carpeta en red es: 

Instalar el servidor NFS en el ordenador A:

    # apt-get install nfs-kernel-server portmap

Configurar que carpetas compartir en A para que sean accesibles en red. Añadimos la siguiente línea al fichero "**/etc/exports**" (Indicando las carpetas que deseamos compartir y los permisos, uno por línea):


    /home/usuario/Público  192.168.1.4/255.255.255.0(rw,sync,subtree_check)

Iniciar la configuración NFS:

    # /etc/init.d/nfs-kernel-server restart

### Cliente de servidor de ficheros:
Ahora queremos que el **ordenador B** se conecte mediante la red a los ficheros compartidos por A y monte un sistema de ficheros en su directorio local "**/home/usuario2/PúblicoB**" (En la máquina B existe el directorio donde montar la unidad de red).

 Instalar el cliente de NFS y configurarlo:

    # apt-get install nfs-common

Montar la unidad remota en el directorio local:

    # mount -t nfs 192.168.1.4:/home/usuario/Público /home/usuario2/PúblicoB

Si queremos configurar para que se monte al inicio del sistema, tendremos que añadir la siguiente línea al fichero "**/etc/fstab**":

    192.168.1.4:/home/usuario/Público  /home/usuario2/PúblicoB  nfs  defaults 0 0
