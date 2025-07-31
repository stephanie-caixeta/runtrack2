<?php
// Faire un algorithme qui affiche les nombres premiers jusqu’à 1000 
// en mettant un retour à la ligne entre chaque nombre.



for ($i = 2; $i <= 1000; $i++) // première boucle traverse les nombres de 2 à 1000 (on sait que 0 et 1 ne sont pas premiers)
    {
    $estPremier = true; // On part du principe que le nombre est un nombre premier
    
        for ($j = 2; $j < $i; $j++) // la deuxième boucle passe par tous les nombres jusqu'à notre nombre ($i) - 1 (car on sait déjà que notre nombre est divisible par lui-même) 
        {
            if ($i % $j == 0) // SI notre nombre se divise exactement par le deuxième nombre, alors il n'est pas premier, on peut déjà sortir de la boucle.
                {
                    $estPremier = false;
                    break; 
                }
        }

        if ($estPremier) // s'il est premier, on affiche le nombre et son retour à la ligne
            {
            echo $i . "<br/>" ;
            }
    }


?>