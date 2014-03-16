---
layout: post
title: "Short URL's through j.mp or bit.ly API with PHP"
description: "How to short URL's through j.mp or bit.ly API with a simple PHP function and cURL"
locale: en
---

First, in order to use the bit.ly API, you must <a href="http://j.mp/account/register">sign up</a> and <a href="http://bit.ly/account/your_api_key">get an api key</a>. Once done, with cURL we can short a URL calling the next simple PHP function:

{% highlight php startinline %}
function shortUrl ($url)
{
  $bitlyUser = 'TEST';
  $apiKey = 'API_KEY';

  $ch = curl_init();

  //cURL options
  curl_setopt($ch, CURLOPT_URL, 'http://api.j.mp/v3/shorten?login=' . $bitlyUser . '&apiKey=' . $apiKey .'&uri=' . htmlspecialchars($url) . '&format=txt');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  //Execution
  $ret = curl_exec($ch);
  curl_close($ch);
  return $ret;
}
{% endhighlight %}
