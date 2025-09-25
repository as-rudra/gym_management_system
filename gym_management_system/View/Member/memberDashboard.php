<?php
require_once("../../Model/packageModel.php"); // connect to DB
$plans = getAllPackages();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Body Trend</title>
        <link rel="stylesheet" href="../CSS/memberDashboardDesign.css"> 
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
                    <li style="padding-top: 20px"><a href="../login.php"><button>Profile</button></a></li> 
                </ul>   
            </div>
            
        </header>
        <h1 style="text-align: center;">Hello Member, Welcome!</h1> 
        <hr>
        <!---------------------------------------------------------------------------->
        
        <h1 style="text-align: center; margin-top: 20px;">Our Membership Plans</h1>

        <div class="package-container">
            <?php foreach($plans as $plan) { ?>
                <div class="package-card">
                    <h2><?php echo $plan['plan_name']; ?></h2>
                    <p><strong>Price:</strong> <?php echo $plan['price']; ?> BDT</p>
                    <p><strong>Duration:</strong> <?php echo $plan['duration']; ?> months</p>
                    <form method="post" action="../../Controller/packageController.php">
                        <input type="hidden" name="plan_id" value="<?php echo $plan['plan_id']; ?>">
                        <button type="submit" name="book_now">Book Now</button>
                    </form>
                </div>
            <?php } ?>
        </div>


        <!---------------------------------------------------------------------------->

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