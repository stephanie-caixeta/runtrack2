<!DOCTYPE html>
<html>
    <header>
        <title>jour7job7</title>
    </header>
    <body>
        <form method="POST">
            <input type="text" name="str">
            <select name="fonction" id="fonction">
                <option value="gras">Gras</option>
                <option value="cesar">César</option>
                <option value="plateforme">Plateforme</option>
            </select>
            <button type="button">submit</button>
        </form>
    <?php 

    function gras($str) {
    $maj = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $isMAJ = false;

    for ($i = 0; isset($str[$i]); $i++) { 
        

        if ($str[$i] == " ")
        {
            $isMAJ = false;
            echo $str[$i];
            continue;
        }

        for ($j = 0; isset($maj[$j]); $j++) { 
            // echo "je veux vérifier si " . $maj[$j] . " vaut " . $str[$i] . "<br>";
            if ($maj[$j] == $str[$i] ) {
                $isMAJ = true;
            }
        }

        if ($isMAJ){
            echo "<b>" . $str[$i] . "</b>";
        }else {
            echo $str[$i];
        }

        
    }
}

gras("BONjour toi Je suis Un enfant");

        function cesar($str, $decalage) {

        }

        function plateforme($str) {

        }
    ?>
    </body>
</html>