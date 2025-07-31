<?php 

$str = 'Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.';
$i = 0;

// ISSET vérifie si l'index suivant existe
for ($i = 0; $i <= isset($str[$i]) ; $i++) {
    if ($i % 2 == 0)
    {
        echo $str[$i];
    }
}

?>