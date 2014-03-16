---
layout: post
title: "Install Java (Sun)  in Ubuntu"
description: "How to install and execute the official Java version of Sun Microsystems in Ubuntu"
redirect_from: /article/install-java-sun-in-ubuntu/
locale: en
---

In a new Ubuntu installation (in this case Ubuntu 10.10), the Java version may not be of <span style="text-decoration: line-through;">**Sun Microsystems**</span> (**Oracle**) (probably will be Openjdk). Sometimes, that non-official version, can't execute some applets or comes without a library or simply will not execute same as Sun version...

To install and activate the Sun Microsystems version, at first, you have to download the JRE (Java Runtime Environment) if you only want to execute Java programs or the JDK (Java Development Kit) if you are a programmer and you probably will need a library.

### If you have Ubuntu 10.10
If you have Ubuntu 10.10 you must add and activate the partner repository first. **Software center > Edit > Software sources** and there add (if you dont have it) and activate "deb http://archive.canonical.com/ubuntu maverick partner".

### Install Java
In Ubuntu you can download and install it through a simple step:


    # aptitude install sun-java6-jre sun-java6-plugin

or the developers version:


    # aptitude install sun-java6-jdk sun-java6-plugin

Once installed, we have to indicate which virtual machine will execute Java programs.

For view the list of all aternatives:

{% highlight bash %}
# update-alternatives --list java

{% endhighlight %}

If you want to choose <span style="text-decoration: line-through;">**Sun**</span> **Oracle** one:

{% highlight bash %}
# update-alternatives --config java

{% endhighlight %}

Now you must select the "java-6-sun" option and enter.

Verify the currently version with:


    # java -version
