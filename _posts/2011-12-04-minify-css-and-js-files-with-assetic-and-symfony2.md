---
layout: post
title: "Minify CSS and JS files with Assetic and Symfony2"
description: "How to unify and minify CSS and JS files with Assetic and Symfony2"
locale: en
---

Unify all our CSS and JS stuff into unique minified files improves significantly your application performance.

Thanks to the Assetic Symfony2 bundle you can do it on the fly.

First, <a href="http://yuilibrary.com/download/yuicompressor/" target="_blank">download the YUI compressor</a>, unzip it and move the "yuicompressor-*.jar" to the "app/Resources/java" folder.

Connect Assetic with the compressor (config.yml file):

{% highlight yaml %}
assetic:
    filters:
        yui_css:
            jar: "%kernel.root_dir%/Resources/java/yuicompressor.jar"
        yui_js:
            jar: "%kernel.root_dir%/Resources/java/yuicompressor.jar"
{% endhighlight %}

Now we can minify and unify our CSS and JS files. The way to do it is inserting into our base Twig layout (for example) the next code:

{% highlight jinja %}
{{ "{%" }} stylesheets filter='?yui_css' output='css/compiled-main.css'
    '@MyBundle/Resources/public/css/*'
%}
{% endhighlight %}

Assetic will compile all of the CSS files of our bundle into a minified and unified one.

In development environment the process will generate the file for every request. For production environment you have to generate the file manually through the next command:


    php app/console assetic:dump --env=dev --no-debug
