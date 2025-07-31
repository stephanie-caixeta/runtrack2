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
        <label for="ville">Ville:</label>
        <input type="text" name="ville" id="ville" placeholder="Ville">
        <br />
        <input type="submit" value="Valider">
    </form>
    <?php 
        $compteur = 0;

        foreach ($_GET as $key => $value) {
                $compteur++;
        }

        echo "Le nombre d’argument GET envoyé est :" . $compteur;
    ?>
    
</body>

</html>