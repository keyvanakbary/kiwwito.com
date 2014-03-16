---
layout: post
title: "PHP function for spanish DNI validation"
description: "PHP function which checks if a given string was a valid spanish DNI/NIE"
redirect_from: /article/php-function-for-spanish-dni-validation/
locale: en
---

PHP function which checks if a given string was a valid spanish DNI/NIE:
{% highlight php startinline %}

/**
 * Function which checks if a string is a valid spanish DNI/NIE
 *
 * @param string $string
 * @return boolean
 */
function is_valid_DNI_NIE ($string)
{
    //Check length
    if (strlen($string) != 9) return false;

    //Possible values for the final letter
    $letterValues = array(
        0 => 'T', 1 => 'R', 2 => 'W', 3 => 'A', 4 => 'G', 5 => 'M',
        6 => 'Y', 7 => 'F', 8 => 'P', 9 => 'D', 10 => 'X', 11 => 'B',
        12 => 'N', 13 => 'J', 14 => 'Z', 15 => 'S', 16 => 'Q', 17 => 'V',
        18 => 'H', 19 => 'L', 20 => 'C', 21 => 'K',22 => 'E'
    );

    //Check if is a DNI
    if (preg_match('/^[0-9]{8}[A-Z]$/i', $string))
    {
        //Check letter
        if (strtoupper($string[strlen($string) - 1]) !=
            $letterValues[((int) substr($string, 0, strlen($string) - 1)) % 23])
            return false;

        //All was ok
        return true;
    }
    //Check if is a NIE
    else if (preg_match('/^[XYZ][0-9]{7}[A-Z]$/i', $string))
    {
        //Comprobar letra
        if (strtoupper($string[strlen($string) - 1]) !=
            $letterValues[((int) substr($string, 1, strlen($string) - 2)) % 23])
            return false;

        //All was ok
        return true;
    }

    //Non valid string
    return false;
}
{% endhighlight %}

</div>