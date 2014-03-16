---
layout: post
title: "Install Google Chrome on Ubuntu 11.10"
description: "How to install Google Chrome on Ubuntu 11.10 "
redirect_from: /article/install-google-chrome-on-ubuntu-11-10/
locale: en
---

Some libs was were included in previous versions of Ubuntu, on the new release 11.10 (Oneiric Ocelot) are missing. If you try to install the Google Chrome .deb package for Ubuntu it may raise an error. The real problem are the not installed dependencies.

Once <a href="http://www.google.com/chrome/eula.html">downloaded</a>, you have to install them manually through the next command:

    sudo dpkg -i file_name.deb

At this point you will see an error, don't worry, once again is a dependency problem. In order to solve it:

    sudo apt-get -f install

Thats all! Enjoy!
