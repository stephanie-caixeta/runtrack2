<?php
// Je lance ma session
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
// Je vérifie que ma variable existe déjà, si elle n'existe pas je la créé et l'initialise
if (!(isset($_SESSION["nbvisites"]))) {
    $_SESSION["nbvisites"] = 0;
} 

if (isset($_POST['reset'])) { // Si je clique sur mon bouton reset
    $_SESSION["nbvisites"] = 0; // mon nombre de visite se réinitialise
} else {
    $_SESSION["nbvisites"]++; // Sinon j'incrémente mon compteur
}

?>

<p>La page a été visité <?php echo $_SESSION["nbvisites"] ?> fois </p>
<form method="post">
    <input type="submit" value="reset" name="reset">
</form>

</body>
</html>