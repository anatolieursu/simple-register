<?php 
    session_start();
    if($_SESSION['logged'] !== 'logged') {
        header('Location: ../index.php');
    }
?>
