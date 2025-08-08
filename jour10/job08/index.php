<?php 
    require_once('../bdd.php');
    $resultat = $bdd->query("SELECT SUM(capacite) AS 'capacite_totale' FROM salles;");
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
                <th>Capacité Totale</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($tab as $tableau) {
            echo "<tr>";
            echo "<td>{$tableau->capacite_totale}</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</body>
</html>