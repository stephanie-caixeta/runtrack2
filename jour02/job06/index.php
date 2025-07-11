<?php 

$largeur = 20;
$hauteur = 10;
$haut = 1;
$bas = 1;
$i = 1;
$j = 1;


    for($haut == 1; $haut <= $largeur; $haut++)
    {
        
        if ($haut <= $largeur) {
            echo "#";
        } else {
            continue;
        }
        
    }

    echo "<br>";

        for ($j = 2; $j < $hauteur; $j++)
        {
            for ($i = 1; $i <= $largeur; $i++)
            {
                if ($i == 1) {
                    echo "#";
                } elseif ($i == $largeur) {
                    echo "#<br>";
                } else {
                    echo " ";
                }
            }
        }

    for ($bas == 1; $bas <= $largeur; $bas++)
    {
        // gestion du bas du rectangle
       if ($bas <= $largeur) {
            echo "#";
        }  else {
            break;
        }
    }
?>