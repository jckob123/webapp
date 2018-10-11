<?php
include("config.php");
session_start();

    if($_SERVER["REQUEST_METHOD"]== "POST")
    {
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $password = password_hash(mysqli_real_escape_string($db,$_POST['password']),PASSWORD_DEFAULT);
        
        $sql = "SELECT username FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];

        $count = mysqli_num_rows($result);

        if($count == 1)
        {
            $_SESSION["username"] = $username;
            $error_msg = "";
            header("location: index.php");
        }
        else
        {
            $error_msg = "Invalid username or password";
        }
    }
?>