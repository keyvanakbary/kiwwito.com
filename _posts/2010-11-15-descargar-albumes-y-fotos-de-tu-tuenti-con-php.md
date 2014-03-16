---
layout: post
title: "Descargar álbumes y fotos de tu Tuenti con PHP"
description: "Como descargar todos tus los álbumes y fotos de Tuenti con el API no oficial de Tuenti y PHP"
redirect_from: /articulo/descargar-albumes-y-fotos-de-tu-tuenti-con-php/
locale: es
---

Por supuesto el primer paso será <a href="/proyecto/tuenti-api/descargas">descargar el API no oficial de Tuenti</a> y <a href="/proyecto/tuenti-api/leeme">asegurarnos de que funciona correctamente</a>.

El script de descarga no puede ser mas sencillo (incluido en los ejemplos del API):

{% highlight php startinline %}
include '/PATH/TO/TUENTI-API/Core/autoloader.php';

//Script configuration, change to yours in order to login correctly
define ('TUENTI_USERNAME', 'user@example.com');
define ('TUENTI_PASSWORD', 'password');
define ('PHOTOS_PER_PAGE', 20);
define ('DOWNLOAD_PATH', dirname(__FILE__) . '/Albums/');
define ('EVER_OVERWRITE', false);

try
{
  $tapi = new Kiwwito\TuentiAPI\Bundle (TUENTI_USERNAME, TUENTI_PASSWORD);

  //Create photos album
  if (!file_exists(DOWNLOAD_PATH))
  {
    mkdir (DOWNLOAD_PATH);
  }

  //Save albums loop
  foreach ($tapi->getAlbums() as $album)
  {
    //Create album folder (if not exists)
    if (!file_exists(DOWNLOAD_PATH . $album->getName()))
    {
      mkdir (DOWNLOAD_PATH . $album->getName());
    }

    echo 'Size (' . $album->getName() . '): ' . $album->getSize() . "\n";
    //Save loop
    $j = 1;
    for ($i = 0; $i < $album->getSize(); $i = $i+PHOTOS_PER_PAGE)
    {
      echo 'Page ' . floor($i/PHOTOS_PER_PAGE) . ', photos ' . $i . "\n";
      foreach ($album->getPhotos(floor($i/PHOTOS_PER_PAGE)) as $photo)
      {
        $savePath = DOWNLOAD_PATH . $album->getName() . '/' . basename($photo->getPhotoUrl600());

        //Only save if the file not exist
        if (EVER_OVERWRITE || !file_exists($savePath))
        {
          file_put_contents($savePath, file_get_contents($photo->getPhotoUrl600()));
          echo 'Saved: ' . basename($photo->getPhotoUrl600()) . ' (' . $j . ') [' . $savePath .']' . "\n";
        }

        $j++;
      }
    }
  }
}
catch (Exception $e)
{
  echo 'An error have ocurred during execution: ' . $e->getMessage();
}
{% endhighlight %}

Se han definido unas constantes en la cabecera para que la configuración del script sea mas sencilla. El API nos permite visualizar fotos de 20 en 20, es por eso que el recorrido es por páginas (utilización del método <code>floor()</code>).
