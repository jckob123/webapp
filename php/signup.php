<?php
include("config.php");
$error_msg_signup = "";


function signupUser($username,$password)
{
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        try
        {
            $pass_hashed = password_hash($password,PASSWORD_DEFAULT);
            $result = "";
        
            if(strlen($username) > 1 && strlen($password) > 1)
            {
                $sql = "INSERT INTO users(username,password) VALUES('$username','$pass_hashed');";
                $result = mysqli_query($db,$sql);
            }
            else 
            {
                $error_msg_signup = "Username or password too short!";
            }
        
            if($result)
            {
                header("location: ../loginPage.php");
                $error_msg_signup = "";
            }
            else
            {
                $error_msg_signup = "There was a problem, please try again later";
            }
        }
        catch(Exception $e)
        {
            $error_msg_signup = $e->getMessage();
        }
        finally
        {
            mysql_free_result($result);
        }
        
    
    }
}

function getUsrGeoLocation()
{

}

echo $_SERVER['REMOTE_ADDR'];

$usr = mysqli_real_escape_string($_POST['username']);
$pass = mysqli_real_escape_string($_POST['password']);

signupUser($usr,$pass);

?>