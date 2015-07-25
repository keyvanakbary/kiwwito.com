---
layout: post
title: Integrate Xdebug with PHPStorm
description: The missing tutorial about how to integrate Xdebug with PHPStorm
locale: en
---

Xdebug is probably the most popular PHP debugger and profiler out there.

## Installing and Configuring Xdebug

If you haven't installed it yet

```bash
pecl install xdebug
```

Verify your installation with

```bash
php -i | grep xdebug
```

Locate where's your `php.ini`

```bash
php -i | grep php.ini
```

Enable Xdebug remote control by apending to the `php.ini` file the next line 

```ini
xdebug.remote_enabled=1
```

## Configuring PHPStorm

Open the Debug _Edit Configurations_ window then _Run > Debug…_

Click on _Add New Configuration_, select _PHP Remote Debug_, on the _Configuration_ section click on the _Servers_ select and create a new one. Fill the host to the application you want to debug, usually "localhost", the port and set the debugger to Xdebug. Once the server is added and back in the _Configuration_ section, set the _Ide key (session id)_ to your username. If you don't know, open a console and execute

```bash
whoami
```

Create the new configuration. Now you'll have a new option to debug under the _Run_ menu. Execute your PHP application, and back in PHPStorm select _Run > Debug 'Your new configuration'_

Stablish some breakpoints in your code and refresh your application, voila!