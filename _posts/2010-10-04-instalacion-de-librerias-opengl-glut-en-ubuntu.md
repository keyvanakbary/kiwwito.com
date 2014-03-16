---
layout: post
title: "Instalación de librerías OpenGL/Glut en Ubuntu"
description: "Pasos para instalar, enlazar y ejecutar programas OpenGL/Glut en Ubuntu"
redirect_from: /articulo/instalacion-de-librerias-opengl-glut-en-ubuntu/
locale: es
---

El primer paso es instalar las librerías de desarollo para OpenGL/Glut en Ubuntu:

    sudo apt-get install freeglut3 freeglut3-dev

Para versiones modernas de Ubuntu (>= 11.10) es necesario instalar un paquete extra debido a que el linker no enlaza correctamente

    sudo apt-get install binutils-gold

Creamos un fichero de test (test.c):
{% highlight c %}
#include <GL/glut.h>

//Función de dibujado
void dibujar(void)
{
  //Color de fondo
  glClearColor(0,1,0,1);
  glClear(GL_COLOR_BUFFER_BIT );
  //Ordenar dibujado
  glFlush();
}

//Ejecución principal
int main(int argc, char **argv)
{
  glutInit(&argc, argv);
  //Buffer simple
  glutInitDisplayMode(GLUT_SINGLE | GLUT_RGB );
  glutInitWindowPosition(50,25);
  glutInitWindowSize(500,250);
  glutCreateWindow("Ventana verde");
  //Llamada a la función de dibujado
  glutDisplayFunc(dibujar);
  glutMainLoop();
  return 0;
}

{% endhighlight %}

Compilamos el fichero. Debemos enlazar las librerias OpenGL/Glut:

    gcc -lGL -lglut test.c -o test
