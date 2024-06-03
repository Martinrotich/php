<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
       <h2 class="he"><u>Registration form</u></h2> 
       <br><br>
       <form action="test1.php" method="post">
        <div class="form-group">
            <b>First name</b> <input type="text" name="fname" id="fname" required placeholder="Enter first name" pattern="^[A-Z]\w*$" oninvalid="this.setCustomValidity('Please make first letter of your name as capital')" onchange="try { this.setCustomValidity('') } catch(e) {}">
        </div>
        <div class="form-group">
            <b>Last name</b> <input type="text" name="lname" id="lname" required placeholder="Enter last name" pattern="^[A-Z]\w*$" oninvalid="this.setCustomValidity('Please make first letter of your name as capital')"onchange="try { this.setCustomValidity('') } catch(e) {}">
        </div>
        <div class="form-group">
            <b>Email address</b> <input type="email" name="email" id="email" required placeholder="Enter email address" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" oninvalid="this.setCustomValidity('Please give valid email')" onchange="try { this.setCustomValidity('') } catch(e) {}">
        </div>
        <div class="form-group">
            <b>Password</b> <input type="password" name="pwd" id="pwd" required placeholder="Enter New password" pattern="(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z]).{6-10}" title="password should be of 6-10 length and should contain at least one character and one number">
        </div>
        <div class="form-group">
            <b>confirm password</b> <input type="password" name="psw_repeat" id="psw_repeat" required placeholder="Repeat your password">
        </div>
        <div class="form-group">
            <button type="Submit">Sign up</button>
        </div>
       </form>
    </div>
    <script>
        var password=document.getElementById("pwd");
        var confirm_password=document.getElementById("psw_repeat");
        function validatepassword(){
            if(password.value!==confirm_password.value)
            {
                confirm_password.setCustomValidity("password don't match");
            }
            else{
                confirm_password.setCustomValidity("");
            }
        }
        password.onchange=validatepassword;
        confirm_password.onkeyup=validatepassword;

        password.onblur = validatepassword;
        confirm_password.onblur = validatepassword;
        document.getElementById("registrationForm").onsubmit = validatepassword;

    </script>
</body>
<html>