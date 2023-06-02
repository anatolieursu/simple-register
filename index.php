<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="content">
            <div class="buttons-register">
                <form method="post" action="index.php">
                    <input type="submit" value="Log-in" name="login">
                    <input type="submit" value="Sign-up" name="signup">
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php 
    if(isset($_POST['login'])) {
        header('Location: ./login/login.php');
    }
    if(isset($_POST['signup'])) {
        header('Location: ./register/register.php');
    }
?>