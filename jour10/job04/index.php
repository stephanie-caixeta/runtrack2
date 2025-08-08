<?php 
    require_once('../bdd.php');
    $resultat = $bdd->query("SELECT * FROM etudiants WHERE prenom LIKE 'T%';");
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
                <th>Prenom</th>
                <th>Nom</th>
                <th>Naissance</th>
                <th>Sexe</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($tab as $tableau) {
            echo "<tr>";
            echo "<td>{$tableau->prenom}</td>";
            echo "<td>{$tableau->nom}</td>";
            echo "<td>{$tableau->naissance}</td>";
            echo "<td>{$tableau->sexe}</td>";
            echo "<td>{$tableau->email}</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</body>
</html>