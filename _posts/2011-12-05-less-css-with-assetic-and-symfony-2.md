---
layout: post
title: "LESS CSS with Assetic and Symfony 2"
description: "Add a LESS filter for your CSS files with Assetic and Symfony 2"
redirect_from: /article/less-css-with-assetic-and-symfony-2/
locale: en
---

<a href="http://lesscss.org/" target="_blank">LESS</a> extends CSS with dynamic behavior such as variables, mixins, operations and functions.

For the LESS Assetic filter we need to have installed first <a href="http://nodejs.org/" target="_blank">node.js</a>, the npm package manager and the LESS library.

### Installing LESS, node.js and npm for Ubuntu
Under Ubuntu you can install all of those in an easy way through the terminal:

{% highlight bash %}
sudo apt-get install nodejs-dev nodejs npm

{% endhighlight %}

Install the LESS library:

{% highlight bash %}
npm install less

{% endhighlight %}

### Configuring the LESS filter in Assetic
In Ubuntu the LESS library may be installed into a hidden directory called ".node_libraries" under your home. If not you have to know where is it before Assetic integration. To configure Assetic for the less filter, open the "app/config/config.yml" and add the next lines:

{% highlight yaml %}
assetic:
    filters:
        less:
            node: /usr/bin/node
            node_paths: [/home/USER/.node_libraries]
{% endhighlight %}

Where "USER" is our user.

### Usage
To use it, add the following lines to the main base layout file:

{% highlight jinja %}
{{ "{%" }} stylesheets filter='less' output='css/compiled-main.css'
    '@MyBundle/Resources/public/less/*'
%}
   <link href="{{ asset_url }}" type="text/css" rel="stylesheet" media="all" />
{{ "{%" }} endstylesheets %}
{% endhighlight %}

That will combine all the LESS files that where under the "less" directory of your Bundle into a one CSS "compiled-main.css".

On development environment all the files will be generated for every request. For production environment you have to generate them manually:


    php app/console assetic:dump --env=dev --no-debug

You can use this filter with other powerful filters like the<a href="/article/minify-css-and-js-files-with-assetic-and-symfony2" target="_blank">YUI compressor filter for Assetic</a>.
