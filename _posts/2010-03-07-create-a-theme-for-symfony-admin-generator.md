---
layout: post
title: "Create a theme for symfony admin generator"
description: "We can create a theme to customize symfony admin generator interface"
locale: en
---

Create a theme for Symfony admin generator from zero is extremely difficult. A more easy choice is to copy it from an existing default one. We can do it following the next steps:

### Create the directory structure
In your proyect "data" dir create another dir named "generator" and into it another one called "sfPropelModule"

### Copy the default Symfony admin generator theme
Go to the Symfony root dir (you can know it entering the command "symfony -V") and copy the directory "**/lib/plugins/sfPropelPlugin/data/generator/sfPropelModule/admin**" into the directory created in the first step ("**/data/generator/sfPropelModule/**").
The name for the theme will be "admin" if you want to change it, rename the folder to the desired name.

### Customize it
Now the templates copied will be in "/data/generator/sfPropelModule/THEME_NAME/templates/templates" you only have to modify them.

### Set the theme in generator.yml
In order to set your theme to the Symfony admin generator, is it necessary to set it into the <strong>generator.yml </strong>file (in the "**config/**" directory of your module) with the attribute "theme" similar to:

{% highlight yaml %}
generator:
  param:
    ...
    theme:THEME_NAME
    ...
{% endhighlight %}
