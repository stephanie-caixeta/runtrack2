<?php
// je créé un compteur de visite
$visite = 0;

// Si mon cookie existe
if (isset($_COOKIE["nbvisites"])) {
    $visite = $_COOKIE["nbvisites"]; // je récupère la donné dans ma variable visite
    $visite++; // j'incrémente mon compteur
    setcookie("nbvisites", $visite, time() + 3600); // et je le modifie
} else { // S'il n'existe pas:
    setcookie("nbvisites", $visite, time() + 3600); // je le créé
    $visite = 1; // je met ma variable à 1
}
if (isset($_POST['reset'])) { // Si j'ai cliqué mon bouton reset
    setcookie("nbvisites", "", time() - 3600); // je supprime mon cookie
    $visite = 0; // je réinitialise mon compteur de visite à 0
}

?>

<!DOCTYPE html>
<html>
<body>



<p>La page a été visité <?php echo $visite ?> fois </p>
<form method="post">
    <input type="submit" value="reset" name="reset">
</form>

</body>
</html>