<!DOCTYPE html>
<html>
    <header>
        <title>Form Get</title>
    </header>
    <body>
        <form method="get">
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" placeholder="Prénom">
            <br/>
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" placeholder="Nom">
            <br />
            <input type="submit" value="Valider">
        </form>
    



        <table>
            <thead>
                <tr>
                    <th>Argument</th>
                    <th>Valeur</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $compteur = 0;

                foreach ($_GET as $key => $value) {

            ?>
                <tr>
                    <td> 
                        <?php
                            echo $key;
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $value;
                        ?>
                    </td>
                </tr>
                    <?php
                        $compteur++;
                        } 
                    ?>
            </tbody>
        </table>
    </body>
</html>
