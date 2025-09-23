<?php
    session_start();
    if(isset($_SESSION["userId"]))
    {
        if(isset($_SESSION["role"])=="owner")
        {
            header("Location:Owner/ownerDashboard.php");
        }

    }

    else
    {

    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registration page</title>
        <link rel="stylesheet" href="CSS/loginPageDesign.css">
    </head>
    <body>
        <div id="registration_div">
            <a href="home.php" style="text-decoration:none; font-size: 20px;" >Home</a>
            <img src="../Asset/regiBackground.png" style="width: 100%; height: 100%;">
            <div id="login_div">
                <img src="../Asset/BodyTrend.png" style="width: 180px; height: 100px;">
                <p style="margin-top: 22%; font-size: 35px;">Welcome back!</p>
                <p>To keep connected with us please<br>login with your personal info</p>
                <form action="../Controller/authController.php" method="post">
                    <input type="text" id="username" name="username" placeholder="username"><br>
                    <input type="password" id="password" name="password" placeholder="password"><br>
                    <input type="submit" id="submit" name="submit" value="submit">
                </form>
            </div>
        </div>
    </body>
</html>

