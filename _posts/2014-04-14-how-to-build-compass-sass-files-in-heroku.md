---
layout: post
title: "How to build Compass/SASS files in Heroku"
description: "Heroku buildpacks are not smart enough to know how to compile our fancy *.scss files into CSS at every push. If we want to do it we have two different options."
locale: en
---

Heroku buildpacks are not smart enough to know how to compile our fancy `*.scss` files into CSS at every push. If we want to do it we have two different options.

## Using Compass Gem
The build script `bin/build`

{% highlight bash %}
#!/bin/bash
export GEM_HOME=$PWD/gems
mkdir -p $GEM_HOME
gem install compass
$GEM_HOME/bin/compass compile scss-dir css-dir
{% endhighlight %}

## Using Bundler
[Bundler](http://bundler.io/) is a dependency manager for ruby and is great for managing all your gems. Create `Gemfile` and add the following lines

{% highlight ruby %}
source "https://rubygems.org"
gem "compass"
{% endhighlight %}

Then the build script will look like

{% highlight bash %}
#!/bin/bash
export GEM_HOME=$PWD/gems
mkdir -p $GEM_HOME
LC_ALL=en_US.UTF-8 gem install bundler   # LC_ALL required by bundler
$GEM_HOME/bin/bundle install
$GEM_HOME/bin/bundle exec compass compile scss-dir css-dir
{% endhighlight %}