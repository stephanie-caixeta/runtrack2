<?php 
session_start();

if (isset($_POST['prenom'])) 
    {
        $prenom = $_POST['prenom'];

        if (!(isset($_SESSION['prenom']))) {
        $_SESSION['prenom'] = [];
    }

    $_SESSION['prenom'][] = $prenom;
}

if (isset($_POST['reset'])) {
        unset($_SESSION['prenom']);
    }
?>

<!DOCTYPE html>
<html>
    <body>
        <form action="" method="post">
            <input type="text" name="prenom" id="prenom">
            <input type="submit" name="submit" value="submit">
            <input type="submit" name="reset" value="reset">
        </form>
        <?php if (!empty($_SESSION['prenom'])) { ?>
<ul>
        <?php foreach ($_SESSION["prenom"] as $prenom) : ?>
                <li><?php echo $prenom . "<br>"; ?></li>
        <?php endforeach; ?>
</ul>
        <?php } ?>
    </body>
</html>