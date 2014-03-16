---
layout: post
title: "Php memory exhausted"
description: "What is the meaning of this error and how to solve it"
redirect_from: /article/php-memory-exhausted/
locale: en
---

### Problem
If at any time, when you try to launch a php script it raises a fatal error with a message like "**Fatal error: allowed memory size of X bytes exhausted**", don't worry, the cause and solution are easy.
This error raises when you try to allocate more memory than it was configured in the configuration files.

### Solution
In order to solve it, you can edit the php.ini client-side file (CLI or CGI) and search and increase the "**memory_limit**" var or you can also modify it's value in real time throught the command line with the "-d" flag. Something like: "php -d memory_limit=512M script.php"
