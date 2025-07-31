<?php 

// je créé mon tableau de nombres
// je créé une boucle qui parcourt le tableau
    // SI le nombre est divisé par deux et n'a aucun reste, 
    // ALORS afficher que le nombre est paire
    // SINON afficher que le nombre est impaire

$nombre = array(200, 204, 173, 98, 171, 404, 459);

foreach ($nombre as $x) {
    if ($x % 2 == 0)
    {
        echo $x . " est paire<br />";
    } else {
        echo $x . " est impaire<br />";
    }
}

?>