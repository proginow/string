<?php

/*
 * Copyright (c) Proginow (https://proginow.com/)
 */

namespace Proginow\String;


use Stringizer\Stringizer;


class char
{

    public static function at($string,$number)
    {
        $s=new Stringizer($string);

        return $s->charAt($number);
    }

    public static function s($string)
    {
        $s=new Stringizer($string);

        return $s->chars();
    }

}

?>