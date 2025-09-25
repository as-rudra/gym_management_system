<?php
require_once("../../Model/db.php");
$conn = getConnection();

// Handle delete
if(isset($_POST['delete_id'])){
    $del_id = $_POST['delete_id'];
    mysqli_query($conn, "DELETE FROM membership_plan WHERE plan_id='$del_id'");
}

// Fetch all packages
$result = mysqli_query($conn, "SELECT * FROM membership_plan");
?>




<!DOCTYPE html>
<html>
    <head>
        <title>Body Trend</title>
        <link rel="stylesheet" href="../CSS/ownerDashboardDesign.css"> 
    </head>
    <body>
        <header>
            <div id="div_menu">            
                <ul>  
                    <li style="padding-top: 0px;"><img src="../../Asset/BodyTrend.png" style="width: 180px; height: 100px;"></li>
                    <li><a style="font-weight: bold;">HOME</a></li>
                    <li><a>ABOUT</a></li>
                    <li><a>GALLERY</a></li>
                    <li><a>CONTACT US</a></li>
                    <li style="padding-top: 20px"><a href="ownerProfile.php"><button>Profile</button></a></li> 
                </ul>   
            </div>
            
        </header>
        <h1 style="text-align: center;">Hello Owner, Welcome!</h1> 
        <hr>
        <!----------------------------------------------------------------------->

        <div style="width: 80%; margin: 20px auto;">
            <h2 style="text-align:center;">All Packages</h2>
            <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; text-align: center;">
                <thead>
                    <tr style="background-color: #4CAF50; color: white;">
                        <th>Plan ID</th>
                        <th>Plan Name</th>
                        <th>Price</th>
                        <th>Duration (Months)</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['plan_id']; ?></td>
                        <td><?php echo $row['plan_name']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['duration']; ?></td>
                        <td>
                            <form method="post">
                                <input type="hidden" name="delete_id" value="<?php echo $row['plan_id']; ?>">
                                <button type="submit" onclick="return confirm('Are you sure to delete this plan?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>


        <!----------------------------------------------------------------------->
        <footer>
            <div id="footer_div">
                <p>
                    Have questions or need help? <br>
                    Reachout to us at:   
                </p>
                <ul>
                    <img src="../../Asset/Facebook_icon.svg.png">
                    <img style="padding-left: 30px" src="../../Asset/Instagram_icon.png">
                    <img style="padding-left: 30px; width: 50px; height: 40px;" src="../../Asset/Gmail_icon_(2020).svg.png">
                </ul>
            </div>
        </footer>
    </body>
</html>