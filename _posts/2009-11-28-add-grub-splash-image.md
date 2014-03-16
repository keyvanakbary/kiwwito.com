---
layout: post
title: "Add GRUB splash image"
description: "To increase user experience, nothing better than add a grub splash image"
redirect_from: /article/add-grub-splash-image/
locale: en
---

Changing or setting an image to GRUB is trivial. For it we need install two tools of our linux environment:

**Convert: **Useful tool for image process (format, size, etc.).
 
 **Startupmanager:** Graphical Grub manager.

### Selecting the image
Look for the image that you want to be the GRUB background. Is not necessary search for a specific format, size or color deep.

### Convert the image into a new GRUB compatible one
The images that can be GRUB backgrounds must have a concrete format, size and color deep. For transforming the image to a new compatible one, you can use the convert tool as:


    convert image.jpg -resize 640x480! -colors 14 -depth 8 image.xpm.gz

### Configure GRUB with the new image
Once we have the compatible image, we have to set it as the default GRUB background with startupmanager.
