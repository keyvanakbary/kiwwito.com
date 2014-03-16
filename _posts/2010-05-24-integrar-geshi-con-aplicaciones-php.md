---
layout: post
title: "Integrar GeSHi con aplicaciones PHP"
description: "Como integrar el popular resaltador de sintaxis GeSHi en aplicaciones PHP"
redirect_from: /articulo/integrar-geshi-con-aplicaciones-php/
locale: es
---

GeSHi (**GE**neric **S**yntax **HI**ghlighter) es una popular librería PHP para resaltar la sintaxis (colorearla) de múltiples lenguajes de programación y marcado. Hay diversas formas de integrarlo con nuestra aplicación PHP, una de las formas mediante la cual se puede integrar de forma automática es haciendo uso de **expresiones regulares**.

Dado que la ejecución de GeSHi y el uso de expresiones regulares es extremadamente lenta, es muy recomendable utilizar sistemas de caché en el lado del servidor para optimizar el rendimiento (escapa al objetivo de este artículo).

Un posible ejemplo de como integrar GeSHi (habiendolo <a href="http://sourceforge.net/projects/geshi/files/">descargado</a> previamente) con nuestra aplicación PHP es:


{% highlight php startinline %}
require_once 'geshi/geshi.php';
/**
 * Reemplazar códigos encontrandos por su correspondiente html procesado
 * @param array $matchs coincidencias
 * @return string código de reemplazo
 */
function replace_code ($matchs)
{
  trim(htmlspecialchars_decode($matchs[2]));
  $geshi = new GeSHi($source, $matchs[1]);
  $geshi->set_header_type(GESHI_HEADER_NONE);
  $geshi->enable_classes();
  return  '<div class="code">' . $geshi->parse_code().'</div>';
}
/**
 * Procesar contenido enriquecido
 * @param string $content contenido sin procesar
 * @return string contenido procesado
 */
function process_content ($content)
{
  //Reemplazamos los pre
  $content = preg_replace_callback(
    '/<pre\s+class\s*=\s*["\'](.*?)["\']>(.*?)<\/pre>/s',
    'replace_code',
    $content
  );
  //Eliminamos saltos de línea (html limpio)
  return str_replace(array("\n", "\r"), '', $content);
}

$content = 'Esto es código PHP: {% highlight php startinline %}
&lt;?php echo "hola" ?&gt;
{% endhighlight %}
';
echo process_content($content);
?>

{% endhighlight %}

Básicamente hacemos uso de una función para buscar las expresiones de código dentro de nuestro contenido (función **process_content**) y una función de reemplazo para dicho código utilizando GeSHi (función **replace_code**).
