<?php

$array = ["Opa", "Olá", "Eu sou o Rafael", "Chega"];
$i = 0;
shuffle($array);

do {
    echo $array[$i];
    $i++;
} while($array[$i] != "Chega");

?>