---
layout: post
title: "Share files over a network with Linux and NFS"
description: "Share files through NFS protocol under Linux"
redirect_from: /article/share-files-over-a-network-with-linux-and-nfs/
locale: en
---

An easy way to share files trough a network between Linux machines is using the **NFS** (Network File System) protocol.

 You only need to know the IP address of the network computers and to install the NFS server/client into each computer.

 Like others server-client systems, one computer will be the server (which will share the files) and the others will be the clients (whose will connect to the shared files.

### Files server:
The **A computer** with the IP address <strong>192.168.1.4</strong> want to share the folder "**/home/user/Public**" over the network for everyone that want to connect.

The procedure to share the folder is:

Install the NFS server in the A computer:


    # apt-get install nfs-kernel-server portmap

Configure the folders in A that will be shared through the network. Add the next line to the "**/etc/exports**" file (shared folders with permissions, one per line):


    /home/user/Public  192.168.1.4/255.255.255.0(rw,sync,subtree_check)

Start  NFS configuration:


    # /etc/init.d/nfs-kernel-server restart

### Client for the file server:
Now we want connect the **B computer** to the shared folder and mount it under the local folder "**/home/user2/PublicB**" (In the B machine the folder must be previously created).

Install the NFS client:


    # apt-get install nfs-common

Mount the remote shared folder into the local machine:


    # mount -t nfs 192.168.1.4:/home/user/Public /home/user2/PublicB


If we want to add it permanently into the init mount table, add the next line into the "**/etc/fstab**" file:


    192.168.1.4:/home/user/Public  /home/user2/PublicB  nfs  defaults 0 0



