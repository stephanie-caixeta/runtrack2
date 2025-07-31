<?php

// Je déclare mes deux variables $largeur et $hauteur en leur assignant une valeur de 20 et de 10 respectivement.
// Je déclare une variable $i qui m'aidera à parcourir mes lignes à l'horizontal. Je lui assigne une valeur de 1.
// Je déclare une variable $j qui m'aidera à parcourir mes lignes à la verticale. Je lui assigne une valeur de 2.


// Je vais créer une boucle pour créer la première ligne de mon rectangle en parcourant la valeur de $largeur avec $i.
// On incrémente $i.
    // SI $i est inférieur ou égal à $largeur ALORS je vais afficher mon symbole (ici un #) et un espace (nbsp).
    // SINON je continue sans rien faire.
// Fin de la boucle.

// J'affiche un retour à la ligne.
// Je donne une nouvelle valeur à ma variable $i pour la prochaine boucle.

/* Je créé une nouvelle boucle qui va parcourir la hauteur de mes lignes du milieu: 
   "$hauteur + 1" (ici 2) à "$hauteur - 1" (donc, strictement inférieur à $hauteur). */
// J'utilise la variable $j qui va m'aider à parcourir les lignes à la verticale. $j commence à deux car elle ne doit pas prendre en 
// compte la première ligne. On incrémente $j.
    /* A l'intérieur de cette boucle, je refais la même boucle que celle de la 
       première ligne qui me permettra cette fois d'afficher chaque ligne du milieu.*/
        // SI $i est égale à 1, donc si ma variable est en première position, ALORS je vais afficher mon symbole et un espace nbsp.
            // J'ajoute un espace nbsp car verticalement les lignes sont espacées d'elles-même; pour que les côtés soient identiques 
            // il faut donc ajouter un espace.
        // MAIS SI $i est égale à ma $largeur ALORS j'affiche mon symbole et un retour à la ligne.
        // SINON j'affiche un espace (nbsp?)
    // Fin de la boucle qui traverse les lignes
// Fin de la boucle qui parcourt la hauteur

// Je donne une nouvelle valeur à ma variable $i pour la dernière boucle.

// Je créé une troisième et dernière boucle pour la dernière ligne de mon rectangle
    // SI $i est inférieur ou égal à $largeur ALORS je vais afficher mon symbole (ici un #)
    // SINON j'arrête tout
// Fin de la boucle et du rectangle
?>