<?php 

$largeur = 20;
$hauteur = 10;
$i = 1;
$j = 2;

    // gestion du haut du rectangle (première ligne)
    for($i = 1; $i <= $largeur; $i++)
    {
            echo "# &nbsp";
        
    }

    echo "<br>";

    // gestion du milieu du rectangle, avec les lignes vides
    for ($j = 2; $j < $hauteur; $j++)
    {
        for ($i = 1; $i <= $largeur; $i++)
        {
            if ($i == 1) {
                echo "# &nbsp";
            } elseif ($i == $largeur) {
                echo "#<br>";
            } else {
                echo "  &nbsp";
            }
        }
    }

    $i = 1;

    // gestion du bas du rectangle (dernière ligne)
    for ($i = 1; $i <= $largeur; $i++)
    {
            echo "# &nbsp";
    }
?>