<?php
    require_once '../../Model/db.php';
    $conn = getConnection();

    // Handle delete
    if(isset($_POST['delete_id'])){
        $del_id = $_POST['delete_id'];
        mysqli_query($conn, "DELETE FROM user WHERE user_id='$del_id'");
    }

    // Handle update
    if(isset($_POST['update_id'])){
        $upd_id = $_POST['update_id'];
        $upd_name = mysqli_real_escape_string($conn, $_POST['upd_name']);
        $upd_email = mysqli_real_escape_string($conn, $_POST['upd_email']);
        $upd_address = mysqli_real_escape_string($conn, $_POST['upd_address']);
        mysqli_query($conn, "UPDATE user SET user_name='$upd_name', email='$upd_email', address='$upd_address' WHERE user_id='$upd_id'");
    }

    // Fetch all employees
    $result = mysqli_query($conn, "SELECT * FROM user WHERE user_type='employee'");
?>




<!DOCTYPE html>
<html>
    <head>
        <title>Body Trend</title>
        <link rel="stylesheet" href="../CSS/ownerProfileDesign.css"> 
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
        <h1 style="text-align: center;">Employee List</h1> 
        <hr>
        <!------------------------------->
        <div style="width: 80%; margin: 20px auto;">
            <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; text-align: center;">
                <thead>
                    <tr style="background-color: #2196F3; color: white;">
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <form method="post">
                            <td><?php echo $row['user_id']; ?></td>
                            <td>
                                <input type="text" name="upd_name" value="<?php echo $row['user_name']; ?>">
                            </td>
                            <td>
                                <input type="email" name="upd_email" value="<?php echo $row['email']; ?>">
                            </td>
                            <td>
                                <input type="text" name="upd_address" value="<?php echo $row['address']; ?>">
                            </td>
                            <td>
                                <input type="hidden" name="update_id" value="<?php echo $row['user_id']; ?>">
                                <button type="submit">Update</button>
                                <button type="submit" name="delete_id" value="<?php echo $row['user_id']; ?>" onclick="return confirm('Are you sure to delete this employee?')">Delete</button>
                            </td>
                        </form>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!------------------------------->
        
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