<?php

/*
 * Copyright (c) Proginow (https://proginow.com/)
 */

namespace Proginow\String;


use Stringizer\Stringizer;


class pad
{

    public static function both($string,$start,$end)
    {
        $s=new Stringizer($string);

        return $s->padBoth($start,$end);
    }

    public static function left($string,$start,$end)
    {
        $s=new Stringizer($string);

        return $s->padLeft($start,$end);
    }

    public static function right($string,$start,$end)
    {
        $s=new Stringizer($string);

        return $s->padRight($start,$end);
    }

}

?>