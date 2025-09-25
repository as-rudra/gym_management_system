<?php
    $host = "localhost";
    $user = "root";
    $pass = ""; // leave empty if your root has no password
    $db   = "gym_management_syatem";
    $port = "3306";

    function getConnection()
    {
        global $host, $user, $pass, $db, $port;

        $conn = mysqli_connect($host, $user, "", $db, $port);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } 

        return $conn;
    }

    // Test connection
    getConnection();
?>