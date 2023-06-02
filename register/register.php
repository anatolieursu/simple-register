<?php 
    include('../db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleRegister.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <form action="register.php" method="post">
                <p class="title-content">Register</p>
                <div class="respective-input">
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="login-btn">
                    <input type="submit" name='register'  value="Register">
                </div>
                <?php 
                if(isset($_POST["register"])) {
                    if(!empty($_POST['username']) && !empty($_POST['password'])) {
                        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
                        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
                        $sql = "
                            INSERT INTO `dblogin` (username, password)
                            VALUES ('$username', '$password')
                        ";

                        mysqli_query($conn, $sql);
                        echo "
                            <p class='error'>Succesfuly register!</p>
                        ";
                        header("Location: ../login/login.php");

                    } else {
                        echo "
                            <p class='error'>Insert Data!</p>
                        ";
                    }
                }
            ?>
            </form>
        </div>
    </div>
</body>
</html>