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


    if (isset($_POST['loginSubmit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = checkLogin($username, $password);

        if ($user) {
            // login success, set session
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['user_name'] = $user['user_name'];
            $_SESSION['user_type'] = $user['user_type'];

            // redirect based on role
            if ($user['user_type'] == "owner") {
                header("Location: ../View/Owner/ownerDashboard.php");
            } elseif ($user['user_type'] == "member") {
                header("Location: ../View/Member/memberDashboard.php");
            } elseif ($user['user_type'] == "employee") {
                header("Location: ../View/Employee/employeeDashboard.php");
            } else {
                echo "Invalid role!";
            }
            exit();
        } else {
            header("Location: ../View/login.php?Err=Incorrect username or password!");
        }
    }

?>