<?php
    require_once("db.php");

    function validateUsers($id, $pass)
    {
        $conn=getConnection();
        $sql="SELECT * FROM user WHERE user_name='$id'";
        $result=mysqli_query($conn, $sql);
        $row=mysqli_fetch_assoc($result);
        return $row;
    }

    function insertUser($username, $usertype, $email, $password, $address = NULL) {
        $conn = getConnection();

        $sql = "INSERT INTO user (user_name, user_type, email, password, address) 
                VALUES ('$username', '$usertype', '$email', '$password', '$address')";

        $status = mysqli_query($conn, $sql);

        mysqli_close($conn);
        return $status;
    }


    function checkLogin($username, $password) {
        $conn = getConnection();

        // Basic query to get user
        $sql = "SELECT * FROM user WHERE user_name='$username' AND password='$password' LIMIT 1";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result); // get user info
            mysqli_close($conn);
            return $user; // array with user info
        } else {
            mysqli_close($conn);
            return false; // login failed
        }
    }

?>