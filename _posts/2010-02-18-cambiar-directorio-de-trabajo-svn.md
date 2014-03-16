---
layout: post
title: "Cambiar directorio de trabajo SVN"
description: "Usando el comando switch podemos cambiar de directorio de trabajo"
redirect_from: /articulo/cambiar-directorio-de-trabajo-svn/
locale: es
---

Si ya tenemos una copia local de trabajo y nos gustaría cambiar el emplazamiento a otro dentro del repositorio, podemos utilizar el comando **switch**.

### Ejemplo
Si ya tenemos una copia de un repositorio que apunta a un directorio remoto llamado "trunk" (http://svn.dominio.com/repos/repositorio-x/trunk) pero deseamos trabajar en otro diferente dentro del repositorio, por ejemplo "branches" (http://svn.dominio.com/repos/repositorio-x/branches) debemos utilizar el comando switch de SVN en la raíz del repositorio:

    svn switch http://svn.dominio.com/repos/repositorio-x/branches

Si por algún casual el mismo repositorio ha sido movido de lugar (por ejemplo a otro dominio) entonces debemos utilizar dicho comando con la opción "**--relocate**". Podemos tener el hipotético caso de tener una copia de cierto repositorio apuntando a un dominio1 que se ha movido a un dominio2, el comando para cambiar la raiz del repositorio entonces sería:

    svn switch --relocate http://svn.dominio1.com/repos/repositorio-x http://svn.dominio2.com/repos/repositorio-x
