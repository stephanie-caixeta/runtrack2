<!DOCTYPE html>
<html lang="fr">
    <body>
        <?php 
            $i = 0;

            while ($i < 1338) {
                if ($i == 42) {
                    echo "<b><u>" . $i . "</u></b><br />";
                } else {
                    echo $i . "<br />";
                }
                $i++;
            }
        ?>
    </body>
</html>