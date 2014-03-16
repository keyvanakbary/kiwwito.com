---
layout: post
title: "Php memoria agotada"
description: "Que significa éste habitual error y como resolverlo"
redirect_from: /articulo/php-memoria-agotada/
locale: es
---

### Problema
Si alguna vez, al ejecutar un script php te lanza un error fatal con un mensaje parecido a `Fatal error: allowed memory size of X bytes exhausted`, no te preocupes, la causa y solución son muy sencillas. Éste error salta cuando tratas de utilizar más memoria que la configurada como máxima posible en los archivos de configuración.

### Solución
Para remediarlo puedes editar el php.ini del cliente con el que te de problemas (CLI o CGI) y buscar la variable `memory_limit` y asignarle mayor tamaño o también puedes ejecutar por consola (CLI) el script php que desees y modificar en tiempo de ejecución la variable del ini a tus necesidades:

    php -d memory_limit=512M script.php
