---
layout: post
title: "Connect to \"eduroam\" under Linux"
description: "How to connect to \"eduroam\" wireless net under Linux (Ubuntu)"
redirect_from: /article/connect-to-eduroam-under-linux/
locale: en
---

**eduroam** (Education Roaming) is a secure international roaming  service for users in Higher Education. The European eduroam  confederation (a confederation of autonomous roaming services) is based  on a set of defined organisational and technical requirements that each  member of the confederation must agree to (by signing the eduroam policy  GN2-07-328) and follow [<a href="http://en.wikipedia.org/wiki/Eduroam">source</a>].

For configure the conexion under a Linux environment (in this tutorial, under Ubuntu 10.04) we need to have insalled Network Manager (installed by default in all Ubuntu distros) and follow a simple steps.

Open "Network connections".

Or we can type in console "nm-connection-editor" (Ubuntu 10.04) or network-manager (Ubuntu <  10.04).

<img src="/uploads/images/full/652ed52a6a7543ca570d14f40677d79d860ebb6d.png" alt="" />
Select the tab "**Wireless**" and press the "Add" button.

<img src="/uploads/images/full/124771290049d4113bff098405ba460dd6842bef.png" alt="" />
In the "**Wireless**" tab we have to insert in SSID field "eduroam".

<img src="/uploads/images/full/41739eebb8dcb6e2f4b54bbea05914f8de2fd84c.png" alt="" width="495" height="512" />
In the "**Wireless security**", into "**Security**" we have to select "**WPA2 enterpris**e", in "**Authentication**" "**TLS through tunnel**", in "**Anonymous identity**" nothing, in "**CA certificate**" nothing, in "**Internal authentication**" we have to select "**PAP**" and in "**User**" and "**Password**" fields the usual authentication data for access your career system (normally user@university.com).

At this point we may be connected.
