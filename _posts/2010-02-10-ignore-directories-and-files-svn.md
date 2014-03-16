---
layout: post
title: "Ignore directories and files SVN"
description: "With file properties, we can ignore files and directories"
locale: en
---

Ignore files or entire directories is easy as executing the next line:


    svn propedit svn:ignore ./DIRECTORY_OR_FILE_TO_IGNORE

At this moment, the default editor will be opened waiting to introduce the files or directory filenames that we want to ignore, we can ignore all files inserting a:


    *

or we can ignore specific filenames:

{% highlight bash %}
*_dev.php
*.jpg
{% endhighlight %}
