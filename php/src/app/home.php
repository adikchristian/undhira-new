<?php
session_start();

if($_SESSION['login']!=true){
    header("location: index.php");
}

echo "Haloo ".$_SESSION['username_login'].' '.$_SESSION['email_login']." <a href='logout.php'>Logout</a>";

