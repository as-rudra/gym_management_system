<?php
    require_once("userController.php");
    $IdErr="";
    $passErr="";
    $hasErr=false;
    $userId="";
    $pass="";
    if(($_SERVER["REQUEST_METHOD"]=="POST") && isset($_POST["submit"]))
    {
        if(empty($_POST["username"]))
        {
            $IdErr="User id cannot be empty";
            $hasErr=true;

        }

        else
        {
            $userId=$_POST["username"];
        }

        if(empty($_POST["password"]))
        {
            $passErr="password cannot be empty";
            $hasErr=true;

        }

        else
        {
            $pass=$_POST["password"];
        }

        if($hasErr)
        {
            header("Location:../View/login.php?idErr=$IdErr&passErr=$passErr");
        }

        else
        {
            $returnedValue=validateUser($userId, $pass);
            if(!$returnedValue)
            {
                header("Location:../View/login.php?invalidUser='Invalid User.'");
            }

            else
            {
                session_start();
                $_SESSION["userId"]=$returnedValue["user_name"];
                $_SESSION["role"]=$returnedValue["user_type"];

                if($returnedValue["user_type"]=="owner")
                {
                    
                    header("location:../view/Owner/ownerDashboard.php");
                }
                
            }
        }
    }


?>