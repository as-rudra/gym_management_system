<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registration page</title>
        <link rel="stylesheet" href="CSS/loginPageDesign.css">

        <script>
            function validateLoginForm() {
                let username = document.getElementById("username").value.trim();
                let password = document.getElementById("password").value.trim();

                if (username === "" || password === "") {
                    alert("Please fill in both username and password.");
                    return false; // stops form submission
                }

                return true; // allow submission
            }
        </script>
    </head>
    <body>
        <div id="registration_div">
            <a href="home.php" style="text-decoration:none; font-size: 20px;" >Home</a>
            <img src="../Asset/regiBackground.png" style="width: 100%; height: 100%;">
            <div id="login_div">
                <img src="../Asset/BodyTrend.png" style="width: 180px; height: 100px;">
                <p style="margin-top: 22%; font-size: 35px;">Welcome back!</p>
                <p>To keep connected with us please<br>login with your personal info</p>
                <form action="../Controller/authController.php" method="post" onsubmit="return validateLoginForm()">
                    <input type="text" id="username" name="username" placeholder="username"><br>
                    <input type="password" id="password" name="password" placeholder="password"><br>
                    <span style="color:red"> <?php if(isset($_GET["Err"]) && $_GET["Err"] != "") { echo htmlspecialchars($_GET["Err"]); }?> <span>
                    <input type="submit" id="submit" name="loginSubmit" value="submit">
                </form>
            </div>
        </div>
    </body>
</html>

