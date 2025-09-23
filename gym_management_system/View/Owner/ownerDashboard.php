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
                    <li style="padding-top: 20px"><a href="../login.php"><button>Profile</button></a></li> 
                </ul>   
            </div>
            
        </header>
        <h1 style="text-align: center;">Hello Owner, Welcome!</h1> 
        <hr>
            <select name="mngUser">
                <option value="" disabled selected hidden>Manage Users</option>
                <option value="employeelist">Employee list</option>
                <option value="memberlist">Member list</option>
            </select>

            <select name="mngPackage">
                <option value="" disabled selected hidden>Manage Packages</option>
                <option value="viewpackages">View packages</option>
                <option value="addpackage">Add new package</option>
            </select>

            <select name="vreport">
                <option value="" disabled selected hidden>View Report</option>
                <option value="viewpackages">Earning details</option>    
            </select>
            <br><br><br><br>
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