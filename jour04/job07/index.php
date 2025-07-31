<!DOCTYPE html>
<html>

<form method="GET">
          <label for="largeur">Largeur:</label>
          <input type="text" id="largeur" name="largeur">
          <br />
          <label for="hauteur">Hauteur:</label>
          <input type="text" id="hauteur" name="hauteur">
          <br />
          <input type="submit" value="Valider">
</form>

<?php 

    $largeur = $_GET['largeur'];
    $hauteur = $_GET['hauteur'];
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
        echo "_"; // SINON j'affiche les espaces
        }
    }

    echo "\\"; // j'affiche le côté droit de mon triangle
    $k = $k + 2; // j'incrémente de deux la variable $k pour que le triangle se décale correctement
    echo "<br>"; // j'affiche un retour à la ligne
}

$i = 1;
$j = 1;

    // $i = 1;

    // gestion du milieu du rectangle, avec les lignes vides
    for ($j = 1; $j < $hauteur; $j++)
    {
        for ($i = 1; $i <= $largeur; $i++)
        {
            if ($i == 1) {
                echo "|";
            } elseif ($i == $largeur) {
                echo "|<br>";
            } else {
                echo " ";
            }
        }
    }

    $i = 1;

    // gestion du bas du rectangle (dernière ligne)
    for ($i = 1; $i <= $largeur; $i++)
    {
        if ($i == 1 OR $i == $largeur) {
            echo "|";
        } else {
               echo "_";
        }
    }
?>

</html>