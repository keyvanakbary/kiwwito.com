---
layout: post
title: "How to know bits Linux"
description: "How to know our Linux Operative System arquitecture  (32 o 64 bits)"
redirect_from: /article/how-to-know-bits-linux/
locale: en
---

Sometimes is useful to know what is our installed arquitecture, we might installed a 32 bits Ubuntu in a 64 bits computer arquitecture.
For know our Linux arquitecture we only have to execute the next command:

    uname -m

If the response is "x86_64" our Linux is a 64 bits system, otherwise (i686) is a 32 bits.