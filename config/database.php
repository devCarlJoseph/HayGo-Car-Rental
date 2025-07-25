<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'hay_go';


    $connect = mysqli_connect($host, $user, $password, $database);

    // if ($connect) {
    //     echo "success";
    // } else {
    //     echo "logs: " . mysqli_error();
    // }

    echo password_hash('1234566', PASSWORD_BCRYPT)
?>