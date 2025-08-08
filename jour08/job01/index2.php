<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php

// Je vérifie que ma variable session existe
if (isset($_SESSION["nbvisites"])) {
    $_SESSION["nbvisites"]++; // Si elle existe, j'incrémente mon nombre de visites
} else {
    $_SESSION["nbvisites"] = 0; // Sinon je la créé
}

if (isset($_POST['reset'])) { // Si le bouton est cliqué
    $_SESSION["nbvisites"] = 0; // Je réinitialise mon nombre de visites
}

?>

<p>La page a été visité <?php echo $_SESSION["nbvisites"]; ?> fois </p>
<form method="post">
    <input type="submit" value="reset" name="reset">
</form>

</body>
</html>