<!DOCTYPE html>
<html>
    <header>
        <title>Form Style</title>
    </header>
    <body>
         <?php 
        if (isset($_POST["style"])) {
            $style = $_POST["style"];
            $style1 = "style1.css";
            $style2 = "style2.css";
            $style3 = "style3.css";
            
            if ($style === $style1) {
                echo "<link rel='stylesheet' href='" . $style1 . "'>";
            } elseif ($style === $style2) {
                echo "<link rel='stylesheet' href='" . $style2 . "'>";
            } elseif ($style === $style3) {
                echo "<link rel='stylesheet' href='" . $style3 . "'>";
            }
        }
        ?>
        <a href="index.php"><h1>Change de style grâce au formulaire!</h1></a>
        <br />
        <form method="post" action="index.php">
            <select id="style" name="style">
                <option value="style1.css">style1</option>
                <option value="style2.css">style2</option>
                <option value="style3.css">style3</option>
            </select>

            <input type="submit" value="Valider">
        </form>

       
    </body>
</html>