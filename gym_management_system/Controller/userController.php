<?php
    require_once("../Model/userModel.php");

    function validateUser($id, $pass)
    {
        return validateUsers($id, $pass);
    }

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $usertype = $_POST['usertype'];
        $email = $_POST['email'];
        $password = $_POST['setPassword'];
        $address = NULL; // default NULL

        $status = insertUser($username, $usertype, $email, $password, $address);

        if ($status) {
            echo "User registered successfully!";
            header("Location: ../View/login.php");
        } else {
            echo "Failed to register user!";
        }
    }

?>