<?php
require_once '../Model/db.php';
require_once '../Model/packageModel.php';

if (isset($_POST['create_plan'])) {
    $plan_name = $_POST['plan_name'];
    $price = $_POST['price'];
    $duration = $_POST['duration'];

    if (addPackage($plan_name, $price, $duration)) {
        echo "<script>alert('Package created successfully!'); window.location='../View/Owner/ownerAddPackage.php';</script>";
    } else {
        echo "<script>alert('Failed to create package.'); window.location='../View/Owner/ownerAddPackage.php';</script>";
    }
}

// Fetch packages
$plans = getAllPackages();

// Handle booking (dummy for now)
if(isset($_POST['book_now'])) {
    $plan_id = $_POST['plan_id'];
    // Later: insert booking record into a bookings table
    echo "<script>alert('Package ID $plan_id booked successfully!');</script>";
}

// Load the view
require '../View/Member/memberDashboard.php';


// Handle delete
if(isset($_POST['delete_id'])) {
    $del_id = $_POST['delete_id'];
    deletePackage($del_id);
}

// Fetch packages
$packages = getAllPackages();

// Load the view
require '../View/Owner/ownerViewPackage.php';
?>