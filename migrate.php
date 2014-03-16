<?php

$articles = require 'db.php';

foreach ($articles as $a) {
  if (!$a['is_published'] || $a['id'] == '19' || $a['id'] == '69') continue;
  foreach (['es', 'en'] as $locale) {
    write_article($a, $locale);
  }
}

function write_article($article, $locale) {
  $path = '_posts/'.$article['published_at'] . '-' . localize_field($article, 'slug', $locale) . '.md';
  file_put_contents($path, generate_content_for($article, $locale));
}

function generate_content_for($article, $locale) {
  $template = <<<ARTICLE
---
layout: post
title: "%title%"
description: "%description%"
redirect_from: %from%
locale: %locale%
---

%content%
ARTICLE;

  $slug = localize_field($article, 'slug', $locale);
  $from = '/' . (($locale == 'es') ? 'articulo' : 'article') . '/' . $slug . '/';

  return strtr($template, [
    '%title%' => escape_quotes(localize_field($article, 'title', $locale)),
    '%content%' => format_content(localize_field($article, 'content', $locale)),
    '%description%' => escape_quotes(localize_field($article, 'description', $locale)),
    '%from%' => $from,
    '%locale%' => $locale
  ]);
}

function escape_quotes($str) {
  return str_replace('"', '\"', $str);
}

function format_content($content) {
  $content = htmlspecialchars_decode(html_entity_decode($content));
  $content = preg_replace('/<h3>(.+)<\/h3>/', '### $1', $content);
  $content = preg_replace('/<strong>([^<.]+)<\/strong>/', '**$1**', $content);
  $content = preg_replace('/<br \/>/', "\n", $content);
  $content = preg_replace('/<pre class="bash">(.*)<\/pre>/', "\n    ".'$1'."\n", $content);
  $content = preg_replace('/<pre class="(\w+)">/', '{% highlight $1 %}'."\n", $content);
  $content = preg_replace('/<\/pre>/', "\n".'{% endhighlight %}'."\n", $content);

  $content = str_replace('highlight php', 'highlight php startinline', $content);
  return $content;
}

function localize_field($article, $field, $locale) {
  return $article[$field.'_'.$locale];
}