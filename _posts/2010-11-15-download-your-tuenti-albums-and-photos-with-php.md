---
layout: post
title: "Download your Tuenti albums and photos with PHP"
description: "How to download all of your Tuenti photos and albums with the non official Tuenti API and PHP"
redirect_from: /article/download-your-tuenti-albums-and-photos-with-php/
locale: en
---

The first step must be <a href="/project/tuenti-api/downloads">download the non official Tuenti API</a> and <a href="/project/tuenti-api/readme">make sure that all was correct</a>.

The download script is very simple (included into the examples of the API):

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

There was defined some constants in the head of the file in order to configure more easily the script. The API gives us the photos 20 by 20, that is the reason why we use the method <code>floor()</code>.