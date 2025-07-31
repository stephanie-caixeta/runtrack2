<!DOCTYPE html>
<html lang="fr">
    <body>
        <?php 
            $i = 0;

            // 3233 non compris dans la condition IF car > à 1337
            /*while ($i < 1338) {
                if ($i == 26 || $i == 37 || $i == 88 || $i == 1111) {
                    $i++;
                } else {
                    echo $i . "<br />";
                    $i++;
                }
            }*/

            for ($i = 0; $i < 1338; $i++) {
                if ($i == 26 OR $i == 37 OR $i == 88 OR $i == 1111) {
                    continue;
                } else {
                    echo $i . "<br />";
                }
            }
        ?>
    </body>
</html>