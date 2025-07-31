<!DOCTYPE html>
<html lang="fr">
    <body>
        <?php 
            $i = 1;

            /*while ($i < 101) {
                if ($i % 3 == 0 && $i % 5 == 0) {
                    echo "FizzBuzz <br />";
                } else if ($i % 3 == 0) {
                    echo "Fizz <br />";
                } else if ($i % 5 == 0){
                    echo "Buzz <br />";
                } else {
                    echo $i . "<br />";
                }
            $i++;
            }*/

            for ($i = 1; $i < 101; $i++) { 
                if ($i % 3 == 0 && $i % 5 == 0) {
                    echo "FizzBuzz <br />";
                } else if ($i % 3 == 0) {
                    echo "Fizz <br />";
                } else if ($i % 5 == 0){
                    echo "Buzz <br />";
                } else {
                    echo $i . "<br />";
                }
            }
        ?>
    </body>
</html>