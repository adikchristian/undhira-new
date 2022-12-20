<?php
session_start();
include "koneksi.php";

if(isset($_POST['login'])){
    $query = mysql_query("SELECT * FROM user_register WHERE username='$_POST[username]'");
    $res = mysql_fetch_array($query);

    if($_POST['username']==$res['username'] and $_POST['password']==$res['password']){
        $_SESSION['login'] = true;
        $_SESSION['username_login'] = $res['username'];
        $_SESSION['email_login'] = $res['email'];
        header("location: home.php");
    }else{
        echo "Gagal Login";
    }
}