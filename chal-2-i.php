<?php

$string1 = "I";
$string2 = "like";
$string3 = "to";
$string4 = "boogie";
$string5 = "boogie";

$joined = $string1 . " " . $string2 . " " . $string1 . " " . $string3  . " " . $string4 . " " . $string5;
var_dump($joined); // string(23) "I like to boogie boogie"