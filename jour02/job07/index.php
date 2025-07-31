<?php

// Je parcours la hauteur de mon triangle
    // Je parcours le début de ma ligne pour définir l'espace avant le côté gauche de mon triangle 
    // J'affiche mon côté gauche
    // Je parcours la suite de ma ligne pour définir l'espace ou les symboles entre les deux côtés
        // SI la hauteur est au maximum (ici de 5), j'affiche le bas du triangle (_)
        // SINON j'affiche mes espaces
    // J'affiche mon côté droit


$hauteur = 5; // Je déclare la hauteur de mon triangle, ici de 5
// Je déclare mes variables
$i = 1; // $i parcourera mes lignes
$j = 1; // $j parcourera ma hauteur
$k = 0; // $k sert de référence pour former l'intérieur du triangle


// première boucle pour parcourir la hauteur du triangle
for ($j = 1; $j <= $hauteur; $j++) {

    // deuxième boucle pour faire afficher les espaces avant le côté gauche du triangle
    for ($i = 1; $i <= $hauteur - $j; $i++) {
        
            echo "&nbsp;&nbsp"; // j'affiche les espaces
    }

    echo "/"; // j'affiche le côté gauche de mon triangle

    // troisième boucle pour afficher l'intérieur du triangle
    for ($i = 0; $i < $k; $i++) {
        if ($j == $hauteur) { // SI la hauteur est la limite de mon hauteur, ici de 5
            echo "_"; // ALORS j'affiche le bas de mon rectangle
        } else {
        echo "&nbsp;&nbsp"; // SINON j'affiche les espaces
        }
    }

    echo "\\"; // j'affiche le côté droit de mon triangle
    $k = $k + 2; // j'incrémente de deux la variable $k pour que le triangle se décale correctement
    echo "<br>"; // j'affiche un retour à la ligne
}
?>