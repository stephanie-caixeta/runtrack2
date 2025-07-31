<?php 

$str = "Les choses que l'on possede finissent par nous posseder.";
$compteur = 0;


while (isset($str[$compteur])) {
    $compteur++;
}

//le compteur 
for ($i = $compteur - 1; $i >= 0; $i--) {
    echo $str[$i];
}

?>