<?php
require_once 'db.php';

    function addPackage($plan_name, $price, $duration) {
        $conn = getConnection();
        $query = "INSERT INTO membership_plan (plan_name, price, duration) VALUES ('$plan_name', '$price', '$duration')";
        return mysqli_query($conn, $query);
    }
    function getAllPackages() {
        $conn = getConnection();
        $sql = "SELECT * FROM membership_plan";
        $result = mysqli_query($conn, $sql);
        $plans = [];
        while($row = mysqli_fetch_assoc($result)) {
            $plans[] = $row;
        }
        return $plans;
    }
    function deletePackage($plan_id) {
        $conn = getConnection();
        mysqli_query($conn, "DELETE FROM membership_plan WHERE plan_id='$plan_id'");
    }


?>