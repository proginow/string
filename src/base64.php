<?php

/*
 * Copyright (c) Proginow (https://proginow.com/)
 */

namespace Proginow\String;


class base64{

    public static function encode($string)
    {
        return \Proginow\Base64\Base64::encode($string);
    }

    public static function decode($string)
    {
        return \Proginow\Base64\Base64::decode($string);
    }

}

?>
