<!DOCTYPE html>
<html>
    <head>
        <title>Registration page</title>
        <link rel="stylesheet" href="CSS/registrationdesign.css">

        <script>
            function validateForm() {
                let username = document.getElementById("username").value.trim();
                let usertype = document.getElementById("usertype").value.trim();
                let email = document.getElementById("email").value.trim();
                let pass = document.getElementById("setPassword").value.trim();
                let confirmPass = document.getElementById("confirmPassword").value.trim();

                if (username === "" || usertype === "" || email === "" || pass === "" || confirmPass === "") {
                    document.getElementById("errorMsg").innerText = "Fill-up all input fields";
                    return false; // stop form submission
                }

                // Check password match
                if (pass !== confirmPass) {
                    document.getElementById("errorMsg").innerText = "Passwords do not match";
                    return false;
                }

                return true; // allow submission
            }
        </script>
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

                <form action="../Controller/userController.php" method="post" id="regForm" method="post" onsubmit="return validateForm()">
                    <input type="text" id="username" name="username" placeholder="username" style="width: 50%; margin-left: 35%;"><br>

                    <select id="usertype" name="usertype" style="width: 40%; margin-left: 150%; margin-top: -65px;">
                        <option value="" disabled selected hidden>Select your role</option>
                        <option value="member">Member</option>
                        <option value="employee">Employee</option>
                    </select><br>

                    <input type="text" id="email" name="email" placeholder="enter your email address"><br>
                    <input type="password" id="setPassword" name="setPassword" placeholder="set password"><br>
                    <input type="password" id="confirmPassword" name="confirmPassword" placeholder="confirm password"><br>

                    <input type="submit" id="submit" name="submit" value="Create Account">
                </form>

                <p id="errorMsg" style="color: red; text-align:center; font-weight:bold;"></p>
            </div>
        </div>
    </body>
</html>