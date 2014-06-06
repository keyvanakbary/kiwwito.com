---
layout: post
title: "Integrate GeSHi with PHP applications"
description: "How to integrate the popular GeSHi syntax highlighter with PHP applications"
redirect_from: /article/integrate-geshi-with-php-applications/
locale: en
---

GeSHi (**GE**neric **S**yntax **HI**ghlighter) is a popular PHP library for syntax highlighting for multiple programming/markup languages. There are multiple forms for integrate it with our PHP application, one of these is using regular expressions.

Warning: GeSHi consumes high processing time, be careful. You can use a cache layer system in order to reduce it (is not the target of the article).

One posible election for integrate GeSHi (previously [downloaded](http://sourceforge.net/projects/geshi/files/)) in our PHP application is:

{% highlight php startinline %}
require_once 'geshi/geshi.php';

/**
 * @param array $matchs matches
 * @return string replace code
 */
function replace_code ($matchs)
{
  trim(htmlspecialchars_decode($matchs[2]));
  $geshi = new GeSHi($source, $matchs[1]);
  $geshi->set_header_type(GESHI_HEADER_NONE);
  $geshi->enable_classes();
  return  '<div class="code">' . $geshi->parse_code() . '</div>';
}

/**
 * @param string $content non processed content
 * @return string processed content
 */
function process_content ($content)
{
  //Replace all the <pre> tags
  $content = preg_replace_callback(
    '/<pre\s+class\s*=\s*["\'](.*?)["\']>(.*?)<\/pre>/s',
    'replace_code',
    $content
  );
  //Delete all new lines (tiny code)
  return str_replace(array("\n", "\r"), '', $content);
}

$content = 'This is PHP code:<pre class="php">
&lt;?php echo "hello" ?&gt;
</pre>';
echo process_content($content);
?>
{% endhighlight %}

First we use the `process_content` function for searching all the &lt;pre&gt; tags and after that, we use the `replace_code` for replacing all the previous matchs with new proccessed HTML ones (GeSHi code).
