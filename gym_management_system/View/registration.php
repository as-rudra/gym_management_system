<!DOCTYPE html>
<html>
    <head>
        <title>Registration page</title>
        <link rel="stylesheet" href="CSS/registrationdesign.css">
    </head>
    <body>
        <div id="registration_div">
            <img src="../Asset/regiBackground.png" style="width: 100%; height: 100%;">
            <div id="login_div">
                <img src="../Asset/BodyTrend.png" style="width: 180px; height: 100px;">
                <p style="margin-top: 22%; font-size: 35px;">Welcome back!</p>
                <p>To keep connected with us please<br>login with your personal info</p>
                <a href="login.php" style="text-decoration: none;"><button>Log in</button></a>
            </div>
            <div id="regi_div">
                <p style="margin-top: 5%; font-size: 35px;">Create Account</p>
                <p>Fill-up the form<br>with your personal info</p>
                    <form action="" method="post">
                        <input type="text" id="username" name="username" placeholder="username" style="width: 50%; margin-left: 35%;">
                        <select id="usertype" style="width: 40%; margin-left: 150%; margin-top:-10%">
                            <option value="" disabled selected hidden>Select your role </option>
                            <option value="member">Member</option>
                            <option value="employee">Employee</option>
                        </select>
                        <br>
                        <input type="text" id="email" name="email" placeholder="enter your email address"><br>
                        <input type="password" id="setPassword" name="setPassword" placeholder="set password"><br>
                        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="confirm password"><br>
                        <input type="submit" id="submit" name="submit" value="Create Account" onclick="window.location.href='login.php';return false;"> <!-- return false;=>prevents the form from submitting anywhere else. -->

                    </form>

            </div>
        </div>
    </body>
</html>