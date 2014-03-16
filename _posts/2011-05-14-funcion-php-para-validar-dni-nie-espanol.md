---
layout: post
title: "Función PHP para validar DNI/NIE español"
description: "Función PHP que comprueba si una cadena de texto es un DNI/NIE español válido"
redirect_from: /articulo/funcion-php-para-validar-dni-nie-espanol/
locale: es
---

Función PHP que comprueba si una cadena de texto es un DNI/NIE español válida:
{% highlight php startinline %}

/**
 * Función que comprueba si una cadena dada es un DNI/NIE válida
 *
 * @param string $cadena
 * @return boolean
 */
function es_DNI_NIE_valido ($cadena)
{
    //Comprobamos longitud
    if (strlen($cadena) != 9) return false;

    //Posibles valores para la letra final
    $valoresLetra = array(
        0 => 'T', 1 => 'R', 2 => 'W', 3 => 'A', 4 => 'G', 5 => 'M',
        6 => 'Y', 7 => 'F', 8 => 'P', 9 => 'D', 10 => 'X', 11 => 'B',
        12 => 'N', 13 => 'J', 14 => 'Z', 15 => 'S', 16 => 'Q', 17 => 'V',
        18 => 'H', 19 => 'L', 20 => 'C', 21 => 'K',22 => 'E'
    );

    //Comprobar si es un DNI
    if (preg_match('/^[0-9]{8}[A-Z]$/i', $cadena))
    {
        //Comprobar letra
        if (strtoupper($cadena[strlen($cadena) - 1]) !=
            $valoresLetra[((int) substr($cadena, 0, strlen($cadena) - 1)) % 23])
            return false;

        //Todo fue bien
        return true;
    }
    //Comprobar si es un NIE
    else if (preg_match('/^[XYZ][0-9]{7}[A-Z]$/i', $cadena))
    {
        //Comprobar letra
        if (strtoupper($cadena[strlen($cadena) - 1]) !=
            $valoresLetra[((int) substr($cadena, 1, strlen($cadena) - 2)) % 23])
            return false;

        //Todo fue bien
        return true;
    }

    //Cadena no válida
    return false;
}
{% endhighlight %}
