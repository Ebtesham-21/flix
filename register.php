<?php 
require_once("includes/classes/FormSanitizer.php"); 
    if(isset($_POST["submitButton"])) 
    {
        $firstName = FormSanitizer :: sanitizeFormString($_POST["firstName"]);  
        $lastName = FormSanitizer :: sanitizeFormString($_POST["lastName"]);  
        $username = FormSanitizer :: sanitizeFormUsername($_POST["username"]);
        $email = FormSanitizer :: sanitizeFormEmail($_POST["email"]);
        $email2 = FormSanitizer :: sanitizeFormEmail($_POST["email2"]);
        $password = FormSanitizer :: sanitizeFormPassword($_POST["pass"]);


        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Reeceflix</title>
    <link rel="stylesheet" type="text/css" href="assets/style/style.css"/>
   
</head>
<body>
<div class="signInContainer">

        <div class="column">
            <div class="header">
                <img src="assets/images/logo.png" title="Logo" alt="site logo">
                <h3>Sign Up</h3>
                <span>to continue to reeceflix</span>
               

            </div>

            <form method="POST">

                <input type="text" name="firstName" placeholder="First name" required>
                <input type="text" name="lastName" placeholder="Last name" required>
                <input type="text" name="userName" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="email" name="email2" placeholder="Confirm email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="password2" placeholder="Confirm password" required>
                <input type="submit" name="submitButton" value="SUBMIT">



            </form>
            <a href="login.php" class="signInMessage">Already have an account ? Sign in here</a>

        </div>

</div>
</body>
</html>