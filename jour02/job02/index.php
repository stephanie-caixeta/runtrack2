<!DOCTYPE html>
<html lang="fr">
    <body>
        <?php 
            $i = 0;

            // 3233 non compris dans la condition IF car > à 1337
            while ($i < 1338) {
                if ($i == 26 || $i == 37 || $i == 88 || $i == 1111) {
                    $i++;
                } else {
                    echo $i . "<br />";
                    $i++;
                }
            }
        ?>
    </body>
</html>