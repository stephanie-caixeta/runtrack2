<?php 
    require_once('../bdd.php');
    $resultat = $bdd->query("SELECT salles.nom AS nom_salle, etage.nom AS nom_etage FROM salles JOIN etage ON salles.id_etage = etage.id;");
    $tab = $resultat->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL Jour10</title>
</head>
<body>
    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>Nom des salles</th>
                <th>Nom des étages</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($tab as $tableau) {
            echo "<tr>";
            echo "<td>{$tableau->nom_salle}</td>";
            echo "<td>{$tableau->nom_etage}</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</body>
</html>