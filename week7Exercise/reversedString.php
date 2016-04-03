<?php
/**
 * Created by PhpStorm.
 * User: humunuk
 * Date: 4/3/16
 * Time: 3:28 PM
 */

$string = "MaasikaKook";

function reversedString($string) {
    $reversed = "";
    $length = strlen($string);

    for ($i = 1; $i <= $length; $i++) {
        $reversed .= $string[$length-$i];
    }

    return $reversed;
}

echo reversedString($string);
