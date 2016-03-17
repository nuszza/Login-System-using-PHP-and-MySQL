<?php
    include 'User.php';

    if (isset($_POST['submit'])) {
        $name = $_POST['user'];
        $pass = $_POST['pass'];

        $object = new User();
        $object->Login($name, $pass);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login System using PHP</title>
    </head>
    <body>
        <form action="index.php" method="post">
            Username : <input type="text" name="user"/>
            Password : <input type="text" name="pass"/>
            <input type="submit" name="submit" value="Login"/>
        </form>
    </body>
</html>
