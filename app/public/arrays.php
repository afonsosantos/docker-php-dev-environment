<?php

$numeros = array(1, 2, 3);

var_dump($numeros);
//

$assoc_numeros = array();

$assoc_numeros["a"] = 1;
$assoc_numeros["b"] = 1;
$assoc_numeros["c"] = 1;

var_dump($assoc_numeros);

echo $assoc_numeros["a"];

$def = isset($assoc_numeros["a"]);

echo $def ? "true" : "false";
