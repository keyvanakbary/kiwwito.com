---
layout: post
title: "API Tuenti en PHP liberada"
description: "Publicada la primera versión del API PHP para Tuenti "
redirect_from: /articulo/api-tuenti-en-php-liberada/
locale: es
---

Después de una semana de desarrollo, me decido a lanzar la primera versión **estable**, **documentada** y sobre todo **libre** de la interfaz PHP para conectar con la API cerrada de Tuenti.

Puedes descargarte e informarte sobre dicha versión desde la <a href="https://github.com/keyvanakbary/php-tuenti-api">página del proyecto dedicada que he creado para ello</a>

Desconozco el motivo por el cual Tuenti se niega a lanzar un API oficial libre a los desarrolladores. Su silencio y negativa a lanzar una API pública me han obligado a crear mi propia interfaz PHP para interactuar directamente con Tuenti usando el API destinado a dispositivos como el iPhone.

Gracias a una popular técnica de hacking "<a href="/interceptar-trafico-de-red-con-dsniff/">man in the middle</a>" entre mi iPhone y mi router, un analizador de paquetes TCP/IP como Wireshark y por supuesto unos cuantos y deliciosos cafés he conseguido mi objetivo: averiguar el formato de comunicación (JSON) y procedimientos remotos para la obtención de datos. He de reconocer el magnifico trabajo de algún que otro <a href="http://scromega.net/7-accediendo-a-la-api-cerrada-de-tuenti.html">curioso</a> que averiguó la encriptación de contraseña en el proceso de login y que sin duda me ha resuelto de algún que otro quebradero de cabeza.