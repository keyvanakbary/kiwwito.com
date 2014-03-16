---
layout: post
title: "Iniciar sesión servidor SSH sin contraseña"
description: "Como conectarse a un servidor mediante SSH sin introducir contraseña"
redirect_from: /articulo/iniciar-sesion-servidor-ssh-sin-contrasena/
locale: es
---

A veces resulta molesto tener que introducir una y otra vez la contraseña para poder iniciar una conexión ssh con un servidor. Si quieres que el servidor reconozca tu identidad y no te pida contraseña:

### Crea una contraseña cifrada en RSA
Metete en tu directorio home


    cd

Si no existe, crea una carpeta llamada '.ssh'


    mkdir .ssh

Crea una contraseña en esa carpeta

{% highlight bash %}
cd .ssh/
ssh-keygen -t rsa -f pass
{% endhighlight %}

Esto generará 2 claves, una pública y otra privada una que será 'pass' y otro 'pass.pub', 'pass' es nuestra clave privada que jamás debe salir de vuestro ordenador. 'pass.pub' es la clave pública que debemos importar a la máquina que queremos que nos reconozca.

### Crea authorized_keys en tu servidor
Establece una conexion con el servidor al que deseas importar tu clave


    ssh SERVIDOR

Si no existe, crea una carpeta '.ssh' en el home y dentro de ella un archivo llamado 'authorized_keys'

{% highlight bash %}
cd
mkdir .ssh
touch .ssh/authorized_keys
{% endhighlight %}

### Importa tu clave al servidor
Sin cerrar la terminal anterior, abre otra terminal y copia tu clave pública que esta dentro de tu maquina (no en el servidor):


    vim .ssh/pass.pub

Selecciona todo el contenido y dale a 'Copiar'
Ahora abre la terminal de antes (En la que estás logeado en el servidor) (Si la has cerrado vuelve a logearte)
Edita el archivo authorized_keys y pega tu clave publica (la que as copiado), cierra sesion.

{% highlight bash %}
vim .ssh/authorized_keys
exit
{% endhighlight %}

### Importa tu clave al gestor ssh
Estando en tu máquina local:

{% highlight bash %}
cd
ssh-add .ssh/pass
{% endhighlight %}

Ya podrás acceder a tu servidor sin tener que poner password.

**Importante: **Si la clave es externa (Como es nuestro caso) cada vez que se inicie el gestor (Es decir, cada vez que reiniciemos, apagemos...) , hemos de repetir el paso 4 para importar nuestra identidad. Algunos sistemas como Ubuntu incluyen todas las identidades de forma automática en el inicio de sesión.
