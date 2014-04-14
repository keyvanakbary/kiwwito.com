---
layout: post
title: "Como compilar ficheros Compass/SASS en Heroku"
description: "Los buildpacks para Heroku no suelen configurar el cómo compilar nuestros geniales ficheros *.scss en cada push. Si queremos hacerlo tenemos dos opciones."
locale: es
---

Los buildpacks para Heroku no suelen configurar el cómo compilar nuestros geniales ficheros *.scss en cada push. Si queremos hacerlo tenemos dos opciones.

## Usar la gema Compass
El archivo de compilación `bin/build`

{% highlight bash %}
#!/bin/bash
export GEM_HOME=$PWD/gems
mkdir -p $GEM_HOME
gem install compass
$GEM_HOME/bin/compass compile scss-dir css-dir
{% endhighlight %}

## Usar Bundler
[Bundler](http://bundler.io/) es un super útil gestor de depdencias para ruby. Crea el fichero `Gemfile´ y añade las siguientes líneas

{% highlight ruby %}
source "https://rubygems.org"
gem "compass"
{% endhighlight %}

El archivo de compilación se parecerá a

{% highlight bash %}
#!/bin/bash
export GEM_HOME=$PWD/gems
mkdir -p $GEM_HOME
LC_ALL=en_US.UTF-8 gem install bundler   # LC_ALL required by bundler
$GEM_HOME/bin/bundle install
$GEM_HOME/bin/bundle exec compass compile scss-dir css-dir
{% endhighlight %}