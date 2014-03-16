---
layout: post
title: "Reconfigure Apache to use Plesk vhosts"
description: "How to reconfigure Apache server for Plesk vhosts configuration"
redirect_from: /article/reconfigure-apache-to-use-plesk-vhosts/
locale: en
---

Sometimes the Apache configuration for the virtual hosts magically disappear when you update to a major version of Plesk.
An easy way to restore it is to reconfigure Apache through the command-line running the next command:

    /usr/local/psa/admin/sbin/httpdmng --reconfigure-all
