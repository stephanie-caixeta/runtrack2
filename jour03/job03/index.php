<?php 

$str = 'I\'m sorry Dave I\'m afraid I can\'t do that';
$i = 0;

for ($i = 0; $i <= isset($str[$i]) ; $i++) {
    if ($str[$i] == "a" OR $str[$i] == "A" OR $str[$i] == "e" OR $str[$i] == "E" OR $str[$i] == "i" OR $str[$i] == "I" OR $str[$i] == "o"  OR $str[$i] == "O" OR $str[$i] == "u" OR $str[$i] == "U" OR $str[$i] == "y" OR $str[$i] == "Y")
    {
        echo $str[$i];
    } 
}

?>