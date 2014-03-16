---
layout: post
title: "Embed images, css and javascript in HTML"
description: "Using the \"data\" URI in the source path of images, css and javascript we can embed it into HTML code"
locale: en
---

The format of the source path of CSS, javascript and images may not be external. Using the "**data**" source type we can embed the element into the HTML document. An example of it:
{% highlight html %}
<img alt="Embeded image" src="data:image/png;base64,iVBORw0KGg<div>oAAAANSUhEUgAAADIA..." />
{% endhighlight %}

Or CSS:
{% highlight css %}
div.image {
  width:100px;
  height:100px;
  background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIA...);
}
{% endhighlight %}

The complication of this method is to get the "**base64**" encoded content of the object. A simply way to get it is using **PHP**:
{% highlight html %}
<img alt="Embeded image" src="data:image/jpeg;base64,<?php echo base64_encode(file_get_contents('image.jpg'))?>"/>
{% endhighlight %}

Also you can use <a href="http://www.greywyvern.com/code/php/binary2base64">one of the many online tools</a> for this target. 

 When you create a HTML document, the structure will not disappear, but what will happen with the external objects?

 This is an easy method to secure the content of the objects into the document forever.