<?php

    function calcule($a, $operation, $b) {
        if ($operation == "+") {
            $result = $a + $b;
        } elseif ($operation == "-") {
            $result = $a - $b;
        } elseif ($operation == "*") {
            $result = $a * $b;
        } elseif ($operation == "/") {
            $result = $a / $b;
        } elseif ($operation == "%") {
            $result = $a % $b;
        }

        return $result;
    }

    echo calcule(5, "-", 2);
?>