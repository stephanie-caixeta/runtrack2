<?php
    
    function nbPremier($n) {
    if ($n < 2) return false;

    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

for ($i = 1; $i <= 1000; $i++) {
    if (nbPremier($i)) {
        echo $i . "<br />";
    }
}
?>