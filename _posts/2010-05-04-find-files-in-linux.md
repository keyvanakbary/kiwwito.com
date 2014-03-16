---
layout: post
title: "Find files in Linux"
description: "How to find files in our Linux system with the \"find\" command"
locale: en
---

Find files in our Linux system can't be as easy as using the "find" command. Using it we can find any matching expression inserted in the command line. If we want to find a file named "FILE" in the current work directory, we can write the next statement:


    $ find -name FILE

Also we can use glob type expressions (regular expressions) like:


    $ find -name *.pdf

The search is recursive, it will search into all directories under the current work directory. If we want to search into all the file system without permission restrictions we must use:


    # find / -name FILE


