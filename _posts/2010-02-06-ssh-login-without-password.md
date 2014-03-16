---
layout: post
title: "SSH login without password"
description: "How to connect to a server through SSH without password"
redirect_from: /article/ssh-login-without-password/
locale: en
---

Sometimes connecting to a server with SSH is very tedious, enter the password at anytime is boring.

### Create a RSA password
Go to your home


    cd

If not exist, create a directory named '.ssh'


    mkdir .ssh

Create a password in that directory

{% highlight bash %}
cd .ssh/
ssh-keygen -t rsa -f pass
{% endhighlight %}

This will generate 2 keys, one public and another private, 'pass.pub' and 'pass'. 'pass' is our private key, this means that we have not to share it, 'pass.pub' is our public key and is the key that we have to export to the server.

### Create the authorized_keys file in your server
Connect with the server that you want to connect without password through SSH (o another protocol):


    ssh SERVER

If not exist, create a directory called '.ssh' in your home, and then, into it another file named 'authorized_keys':

{% highlight bash %}
cd
mkdir .ssh
touch .ssh/authorized_keys
{% endhighlight %}

### Import your password to the server
Don't close the console, open a new one and copy the public key (the content of the 'pass.pub' file)


    vim .ssh/pass.pub

Select all the content and copy it (Ctrl+Shift+C)
Now open the last console (where you stay logged into the server, if you had closed it, reconnect)
Ahora abre la terminal de antes (En la que estás logeado en el servidor) (Si la has cerrado vuelve a logearte) and paste the public key into the authorized_keys file, after logout.

{% highlight bash %}
vim .ssh/authorized_keys
exit
{% endhighlight %}

### Import the key into the ssh agent
In your local machine:

{% highlight bash %}
cd
ssh-add .ssh/pass
{% endhighlight %}

At this moment you can enter into the server without password.

**Important: **If we have setted an external key (Like our case), every time that the agent inits (every time that we reboot the machine) we have to repeat the step 4 for correct identity import.
