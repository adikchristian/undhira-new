<?php
session_start();

if(isset($_SESSION['login'])==true){
    header("location: home.php");
}

?>

<html>
    <head>
        <title>Login</title>
    </head>

    <body>
        <h1>Login</h1>
        <form action="login.php" method="POST">
            username
            <input type="text" name="username" /><br>
            password
            <input type="password" name="password" /><br>
            <input type="submit" name="login" value="Login" />
        </form>
    </body>
</html>