<?php 
session_start();
require_once "config/config.php"; 

if (isset($_POST['sign-up'])) {
    $name = $_POST['name'];
    $email = trim($_POST['email']);   
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $position = $_POST['position'];

    $checkEmail = $conn->query("SELECT admin_email FROM holders WHERE admin_email = '$email'");
    if ($checkEmail->num_rows > 0) {
        $_SESSION['sign-up_error'] = 'Email is already registered!';
        $_SESSION['active_form'] = 'sign-up';
    } else {
        $conn->query("INSERT INTO holders (admin_name, admin_email, admin_pass, position) VALUES ('$name', '$email', '$password', '$position')");
    }

    header("Location: index.php");
    exit();
}

if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM holders WHERE admin_email = '$email'");
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        if (password_verify($password, $user['admin_pass'])) {
            $_SESSION['name'] = $user['admin_name'];    
            $_SESSION['email'] = $user['admin_email'];

            if ($user['position'] === 'Admin') {
                header("Location: admin_page.php");
            } else {
                header("Location: fleet_owner.php");
            }
            exit();
        }
    }

    $_SESSION['login_error'] = 'Incorrect email or password';
    $_SESSION['active_form'] = 'login';
    header("Location: index.php");
    exit();
}
?>
