---
layout: post
title: "Installing OpenGL/Glut libraries in Ubuntu"
description: "Steps to install, link and run OpenGL/Glut programs in Ubuntu"
redirect_from: /article/installing-opengl-glut-libraries-in-ubuntu/
locale: en
---

The first step is to install the development libraries of OpenGL/Glut in Ubuntu:

    sudo apt-get install freeglut3 freeglut3-dev

For newer versions of Ubuntu (>= 11.10) you have to install another package because the linker does't link anymore.

    sudo apt-get install binutils-gold

Create a test file (test.c):
{% highlight c %}
#include <GL/glut.h>

//Drawing funciton
void draw(void)
{
  //Background color
  glClearColor(0,1,0,1);
  glClear(GL_COLOR_BUFFER_BIT );
  //Draw order
  glFlush();
}

//Main program
int main(int argc, char **argv)
{
  glutInit(&argc, argv);
  //Simple buffer
  glutInitDisplayMode(GLUT_SINGLE | GLUT_RGB );
  glutInitWindowPosition(50,25);
  glutInitWindowSize(500,250);
  glutCreateWindow("Green window");
  //Call to the drawing function
  glutDisplayFunc(draw);
  glutMainLoop();
  return 0;
}

{% endhighlight %}

Compile the file linking the OpenGL/Glut libraries:

    gcc -lGL -lglut test.c -o test
