---
layout: post
title: "Massive operations over images under Ubuntu"
description: "Thanks to ImageMagick and the command console we can execute operations over massive amount of images "
redirect_from: /article/massive-operations-over-images-under-ubuntu/
locale: en
---

<a href="http://www.imagemagick.org/">ImageMagick</a> is a library collection for edit, convert, compound, save images in other formats (greater than 100) and much more...

Available for multiple platforms: <a href="http://www.imagemagick.org/script/binary-releases.php#windows">Windows</a>, <a href="http://www.imagemagick.org/script/binary-releases.php#unix">Linux</a> and Mac.
Is a very useful tool, you can operate over multiple images with only one instruction. For example, if we want to reduce the quality of al the JPG files in a directory to 80% we only have to enter:

    mogrify -quality 80 *.jpg

Also, if we want to resize all to a maximum resolution of 800x600:

    mogrify -resize 800x600 *.jpg
