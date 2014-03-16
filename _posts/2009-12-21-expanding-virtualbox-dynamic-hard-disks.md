---
layout: post
title: "Expanding VirtualBox dynamic hard disks"
description: "How to expand *.vdi dinamic disks"
redirect_from: /article/expanding-virtualbox-dynamic-hard-disks/
locale: en
---

Although we can not expand a virtual dinamic hard drive (*.vdi) directly we can finally expand it through a cloning trick. The steps are:


### Create a new virtual hard disk (new device)
First create a new hard disk with the desired storage size (it will be the new hard disk).

    VBoxManage createhd –filename my_filename.vdi --size 50000 --remember

### Clone the old drive into the new one
In order to have the same data (for example: OS) in the new hard drive we have to clone the previous and size limited one.

    VBoxManage clonehd old.vdi new.vdi --existing

### Configure the new one as the system default
First remove the last one and then select the new created one as the default.

    VBoxManage modifyvm MyVMName --hda none
    VBoxManage modifyvm MyVMName --hda new.vdi

Once you have done it, you will need to expand the disc. The details for do this are out of the scope of this article, probably a good way to do it is using a free program like [Gparted](http://gparted.sourceforge.net/).