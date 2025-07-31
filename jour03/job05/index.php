<?php 

$str = "on n'est pas le meilleur quand on le croit mais quand on le sait.";
$dic = [
    "Voyelles"=> 0,
    "Consonnes"=> 0
];
    
$voyelles = "aeiouy";

for ($i=0; $i < 65 ; $i++) { 
    $strVar = $str[$i];

    // Si ce n'est pas un charactère entre A et Z (espace, apostrophe etc), on passe à la prochaine itération de la boucle.
   if (!($strVar >= 'a' ) && ($strVar <= 'z')) {
        continue;
    }

    $isVowel = false;

    for ($j = 0; $j < 6; $j++) { 
       if ($strVar == $voyelles[$j]){
        $isVowel = true;
       }
    }

        if($isVowel) {
            $dic["Voyelles"]++;
        }
        else {
            $dic["Consonnes"]++;
        }  
}

echo "<table border='1'>
    <thead>
        <tr>
            <th>Consonnes</th>
            <th>Voyelles</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{$dic['Consonnes']}</td>
            <td>{$dic['Voyelles']}</td>
        </tr>
    </tbody>
</table>";

?>