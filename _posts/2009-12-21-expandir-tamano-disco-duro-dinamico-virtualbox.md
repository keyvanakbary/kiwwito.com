---
layout: post
title: "Expandir tamaño disco duro dinámico VirtualBox"
description: "Como expandir discos dinámicos *.vdi"
locale: es
---

Aunque teóricamente no se puede expandir un disco dinámico *.vdi de VirtualBox, podremos conseguir nuestro objetivo mediante la clonación. Los pasos a seguir son:


### Crear un nuevo disco duro virtual (dispositivo)
Seleccionamos el tamaño del disco duro que queramos (será nuestro nuevo disco duro).


    VBoxManage createhd –filename my_filename.vdi --size 50000 --remember



### Clonar el antiguo disco duro al nuevo
Esto es, se copiará el contenido del anterior disco duro al nuevo. Obteniendo como resultado un disco duro (el nuevo) con los contenidos del antiguo pero con un tamaño mayor.


    VBoxManage clonehd old.vdi new.vdi --existing



### Seleccionar el nuevo disco duro para la máquina virtual
Para arrancar con el nuevo disco duro (que a efectos será igual que el anterior pero ampliado) debemos establecerlo:

{% highlight bash %}
VBoxManage modifyvm MyVMName --hda none
VBoxManage modifyvm MyVMName --hda new.vdi
{% endhighlight %}

Una vez que has hecho esto deberías expandir la partición. Los detalles de como expandir dicha partición quedan fuera de este tutorial, quizás un buen programa gratuito para poder hacerlo podría ser <a href="http://gparted.sourceforge.net/">Gparted</a>.