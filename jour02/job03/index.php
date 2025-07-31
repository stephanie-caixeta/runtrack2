<!DOCTYPE html>
<html lang="fr">
    <body>
        <?php 
            $i = 0;

            /*while ($i < 101) {
                if ($i > 0 && $i < 20) {
                    echo "<i>" . $i . "</i><br />";
                } else if ($i > 25 && $i < 50 && $i != 42) {
                    echo "<u>" . $i . "</u><br />";
                } else if ($i == 42) {
                    echo "La Plateforme_ <br />";
                } else {
                    echo $i . "<br />";
                }
            $i++;
            }*/

            for ($i = 0; $i < 101 ; $i++) { 
                if ($i == 42) {
                    echo "La Plateforme_<br />";
                } elseif ($i > 25 && $i < 50 && $i != 42) {
                    echo "<u>" . $i . "</u><br />"; 
                } elseif ($i > 0 && $i < 20) {
                    echo "<i>" . $i . "</i><br />";
                } else {
                    echo $i . "<br />";
                }
            }
        ?>
    </body>
</html>