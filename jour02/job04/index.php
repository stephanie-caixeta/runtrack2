<!DOCTYPE html>
<html lang="fr">
    <body>
        <?php 
            $i = 0;

            while ($i < 101) {
                if ($i % 3 == 0 && $i % 5 != 0) {
                    echo "Fizz <br />";
                } else if ($i % 5 == 0 && $i % 3 != 0){
                    echo "Buzz <br />";
                } else if ($i % 3 == 0 && $i % 5 == 0) {
                    echo "FizzBuzz <br />";
                } else {
                    echo $i . "<br />";
                }
            $i++;
            }
        ?>
    </body>
</html>