<? 
    if(isset($_POST["submitButton"])) 
    {
        echo "Form was submitted";

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

        </div>

</div>
</body>
</html>