<?php
include("config.php");
session_start();

    if($_SERVER["REQUEST_METHOD"]== "POST")
    {
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $password = mysqli_real_escape_string($db,$_POST['password']);
        
        $sql = "SELECT password FROM users WHERE username='$username'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $pass = trim($row['password']);

        
        if(password_verify($password,$pass))
        {
            $_SESSION["username"] = $username;
            $error_msg = "";
            header("location: index.php");
        }
        else
        {
            $error_msg = password_verify($password,$pass);
        }
    }
?>