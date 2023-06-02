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
    <link rel="stylesheet" href="styleLogin.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <form action="login.php" method="post">
                <p class="title-content">Login</p>
                <div class="respective-input">
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="login-btn">
                    <input type="submit" name='login'  value="Login">
                </div>
                <?php 
                if(isset($_POST["login"])) {
                    if(!empty($_POST['username']) && !empty($_POST['password'])) {
                        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
                        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
                        $sql = "SELECT * FROM `dblogin` WHERE username = '$username';";
                        $result = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                            if($password === $row['password']) {
                                $html = '
                                    <p class="error">Login Succesfuly!</p>
                                ';
                                echo $html . '<br>';
                                header('Location: ../loginSucc/next.php');
                            } else {
                                $html = '
                                    <p class="error">Invalid Password!</p>
                                ';
                                echo $html . '<br>';
                            }
                        } else {
                            $html = '
                                <p class="error">Invalid Username!</p>
                            ';
                        echo $html . '<br>';
                        }
                    } else {
                        $html = '
                                <p class="error">Enter data Login!</p>
                            ';
                        echo $html . '<br>';
                    }
                }
            ?>
            </form>
        </div>
    </div>
</body>
</html>