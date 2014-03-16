---
layout: post
title: "Instalar Java (Sun) en Ubuntu"
description: "Como instalar y ejecutar la versión oficial Java de Sun Microsystems en Ubuntu"
locale: es
---

En una nueva instalación de Ubuntu, la versión de Java instalada no es la de <span style="text-decoration: line-through;">**Sun Microsystems**</span> **Oracle** sino una "libre" (Openjdk). Aunque pueda ejecutar de forma correcta muchas aplicaciones, puede que no funcionen correctamente algunos applets o que falten o den fallos algunas librerías (swing, awt, etc.)...

Para instalar y activar la versión de Sun Microsystems, primero se debe descargar el **JRE** (Java Runtime Environment) si simplemente se quieren ejecutar los programas java o el **JDK** (Java Development Kit) si eres un desarrollador interesado en disfrutar de las librerías que Java proporciona.

### Si tienes Ubuntu 10.10
Si tienes Ubuntu 10.10 debes primero añadir y activar el repositorio partner de esta versión. **Centro de software > Editar > Fuentes de software** y si no la tienes añadida añades (Añadir) y "deb http://archive.canonical.com/ubuntu maverick partner" y la activas.

### Instalar Java
Desde Ubuntu puedes descargarlas e instalarlas de forma muy sencilla mediante:


    # aptitude install sun-java6-jre sun-java6-plugin

o la versión para desarrolladores:


    # aptitude install sun-java6-jdk sun-java6-plugin

Una vez instalados, debemos especificar las aplicaciones Java se ejecuten en la máquina virtual de <span style="text-decoration: line-through;">**Sun**</span> **Oracle**.

Para ver las posibles alternativas:

{% highlight bash %}
# update-alternatives --list java

{% endhighlight %}

Debemos fijarnos en que alternativa elegir. Para la versión de <span style="text-decoration: line-through;">**Sun**</span> **Oracle** elegiremos "java6-sun":

{% highlight bash %}
# update-alternatives --config java

{% endhighlight %}

Ahora debes seleccionar la opción correcta (aquella en la que figurará java-6-sun).

Para verificar que todo ha seguido según lo esperado comprobamos la versión de Java:


    # java -version
