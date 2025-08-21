<?php 

session_start();

$errors = [
    'login' => $_SESSION['login_error'] ?? '',
    'sign-up' => $_SESSION['sign-up_error'] ?? '',
];

$activeForm = $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error) {
    return !empty($error) ? "<p class='error-message'>$error</p>" : '';
}

function isActiveForm($formName, $activeForm) {
    return $formName === $activeForm ? 'active ': '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="hero">
        <div class="container">
            <!-- LOGIN -->
            <div class="form-box <?= isActiveForm('login', $activeForm); ?>" id="login-form">
                <div class="main">
                    <div class="logo">
                        <img src="assets/images/logo.png" alt="">
                    </div>
                </div>
                <div class="greetings">
                    <h4>Welcome to</h4>
                    <h2>Hay Go Car Rental</h2>
                </div>
                <div class="identify">
                    <span>Log in as</span> 
                    <br>
                    <h2>ADMIN</h2>
                </div>
                <form action="sign_up.php" method="post">
                    <?= showError($errors['login']); ?>    
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit" name="login">Log In</button>
                    <p>Don't have an account? <a href="#" onclick="showForm('sign-up-form')">Register</a></p>
                </form>
            </div>
            <div>

            </div>

            <!-- SIGN UP -->
            <div class="form-box <?= isActiveForm('sign-up', $activeForm); ?>" id="sign-up-form">
                <div class="main">
                    <div class="logo">
                        <img src="assets/images/logo.png" alt="">
                    </div>
                </div>
                <div class="greetings">
                    <h4>Welcome to</h4>
                    <h2>Hay Go Car Rental</h2>
                </div>
                <form action="sign_up.php" method="post">
                    <h2>Create Account</h2>
                    <?= showError($errors['sign-up']); ?>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <select name="position" required>
                        <option value="">Select</option>
                        <option value="Fleet Owner">Fleet Owner</option>
                        <option value="Admin">Admin</option>
                    </select>
                    <button type="submit" name="sign-up">Sign Up</button>
                    <p>Already have an account? <a href="#" onclick="showForm('login-form')">Log In</a></p>
                </form>
            </div>
        </div>

        <div class="hero-image">    
            <img src="assets/images/car.png">
        </div>
    </div>
    

    <script src="assets/js/script.js"></script>
</body>
</html>
