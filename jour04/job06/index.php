<!DOCTYPE html>
<html>
    <header>
        <title>Pair GET</title>
    </header>
    <body>
        <form method="GET">
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" name="nombre">
          <br />
          <input type="submit" value="Valider">
        </form>
      
        <?php 
            if (isset($_GET['nombre'])) {
                $nbr = $_GET['nombre'];

                if ($nbr % 2 == 0) {
                    echo "Nombre pair";
                } else {
                    echo "Nombre impair";
                }
           }
        ?>


    </body>
</html>
