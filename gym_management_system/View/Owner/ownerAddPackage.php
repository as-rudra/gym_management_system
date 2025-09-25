<!DOCTYPE html>
<html>
    <head>
        <title>Body Trend</title>
        <link rel="stylesheet" href="../CSS/addOwnerAddPackageDesign.css"> 
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
            <!-------------------------------------------------------->
            <div class="package-container">
                <h2>Create Membership Package</h2>
                <form action="../../Controller/packageController.php" method="post" class="package-form">
                    <table class="package-table">
                        <tr>
                            <td><label for="plan_name">Plan Name:</label></td>
                            <td><input type="text" id="plan_name" name="plan_name" required></td>
                        </tr>
                        <tr>
                            <td><label for="price">Price:</label></td>
                            <td><input type="number" id="price" name="price" step="0.01" required></td>
                        </tr>
                        <tr>
                            <td><label for="duration">Duration (months):</label></td>
                            <td><input type="number" id="duration" name="duration" required></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align:center;">
                                <button type="submit" name="create_plan">Create Plan</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>



            <!-------------------------------------------------------->
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