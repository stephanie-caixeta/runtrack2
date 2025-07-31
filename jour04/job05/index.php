<!DOCTYPE html>
<html>
    <header>
        <title>Form Post</title>
    </header>
    <body>
        <form method="POST">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username">
          <br />
          <label for="pwd">Password:</label>
          <input type="password" id="password" name="password">
          <input type="submit" value="Valider">
        </form>
      
        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST['username'];
                $password = $_POST['password'];

                if ($username == "John" && $password == "Rambo") {
                    echo "C'est pas ma guerre";
                } else {
                    echo "Votre pire cauchemar";
                }
           }
        ?>


    </body>
</html>
