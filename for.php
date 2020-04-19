<?php

$lista = ["Pão","Leite","Suco","Bolacha"];
$lista[] = "Sabão";

echo "Lista de compras:<br>";
for($i=0; $i<count($lista); $i++){
    echo $lista[$i]."<br>";
}

?>