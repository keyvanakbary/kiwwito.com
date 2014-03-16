---
layout: post
title: "Aprender PHP de forma rápida sabiendo Java y C"
description: "Si ya conoces Java y C aprender PHP será como un juego de niños"
redirect_from: /articulo/aprender-php-de-forma-rapida-sabiendo-java-y-c/
locale: es
---

Dada la enorme similitud entre la programación Orientada a Objetos de PHP y Java y la programación procedimental de PHP a C, conociendo uno o ambos aprender PHP será un prácticamente un juego de niños.
### Programación OO PHP muy similar a Java:
**En Java:**

{% highlight java %}
//Clase Abstracta
abstract MiClaseAbstracta {
  abstract public int miMetodoAbstracto ();
  abstract protected int miMetodoAbstracto2 ();

  /**
  * Constructor de clase
  */
  public MiClaseAbstracta (int numero) {}
  /**
  * Método estático
  */
  public static void miMetodoEstatico () {}
  /**
  * Método normal
  */
  public void miMetodo () {}
}

//Interfaz
interface MiInterfaz {
  abstract private int miMetodoDeInterfaz();
}

//Clase con herencia abstracta e interfaz
class MiClaseConHerenciaEInterfaz extends MiClaseAbstracta implements MiInterfaz {
  public int miMetodoAbstracto () {}
  protected int miMetodoAbstracto2 () {}
  private int miMetodoDeInterfaz() {}

  public MiClaseConHerenciaEInterfaz () {
    //Llamada al constructor del padre
    super();
    //Llamada a método estático
    MiClaseAbstracta.miMetodoEstatico();
    //Llamada a método padre
    this.miMetodo();
    //También super.miMetodo()
  }
}
{% endhighlight %}

**En PHP:**

{% highlight php startinline %}
//Clase Abstracta
abstract MiClaseAbstracta {
  abstract public function miMetodoAbstracto ();
  abstract protected function miMetodoAbstracto2 ();

  /**
  * Constructor de clase
  */
  public function MiClaseAbstracta ($numero) {}
  /**
  * Método estático
  */
  public static function miMetodoEstatico () {}
  /**
  * Método normal
  */
  public function miMetodo () {}
}

//Interfaz
interface MiInterfaz {
  abstract private function miMetodoDeInterfaz();
}

//Clase con herencia abstracta e interfaz
class MiClaseConHerenciaEInterfaz extends MiClaseAbstracta implements MiInterfaz {
  public function miMetodoAbstracto () {}
  protected function miMetodoAbstracto2 () {}
  private function miMetodoDeInterfaz() {}

  public __construct () {
    //Llamada al constructor del padre
    parent::__construct();
    //Llamada a método estático
    MiClaseAbstracta::miMetodoEstatico();
    //Llamada a método padre
    $this->miMetodo();
    //Tambien parent::miMetodo() ó self::miMetodo()
  }
}
{% endhighlight %}

### Programación procedimental muy parecida a C
Prácticamente no hay ningúna diferencia en la programación procedimental de PHP respecto a C. Así un hola mundo en C será:

{% highlight c %}
//Inclusión de archivos/librerías
#include <stdio.h>

//Función principal
int main (int argc,char **argv)
{
   //Impresión por pantalla y salida del programa
   printf("Hola mundo\n");
   return 0;
}
{% endhighlight %}

**y en PHP:**

{% highlight php startinline %}
//Función principal
function main () {
  echo "Hola mundo\n";
  return 0;
}
//Ejecutamos main
main();

{% endhighlight %}

### Principales diferencias:
<ul>
<li>En PHP todas las **variables** van precedidas con el caracter '$'</li>
<li>PHP es un lenguaje muy poco o practicamente no tipado, no es necesaria la definición del tipo en la variable</li>
<li>En PHP el método contructor en las clases es "**__construct**"</li>
<li>En PHP todos los métodos/procedimientos han de precederse con la palabra reservada "**function**"</li>
<li>En PHP el acceso a métodos de clases (de instancias de objetos) ha de ser con el operador "**->**"</li>
<li>En PHP el acceso a los métodos del padre se pueden hacer con "**parent::**" o "**$this->**"</li>
<li>En PHP cualquier acceso estático se hace mediante el operador "**::**"</li>
<li>En PHP la inclusión de ficheros externos se realiza mediante la llamada a "include" o "require"</li>
<li>En PHP no hay métodos autoejecutables (como el "main" de Java o C) se han de llamar explicitamente.</li>
</ul>