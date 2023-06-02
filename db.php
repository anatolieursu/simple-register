<?php 
    $db_username = 'localhost';
    $db_root = 'root';
    $db_pass = '';
    $db_name = 'registration';

    $conn = mysqli_connect($db_username, $db_root, $db_pass, $db_name);

    if(!$conn) {
        echo "Nu ne-am putut conecta la baza de date!";
    }

