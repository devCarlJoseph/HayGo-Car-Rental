<?php 

session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="assets/css/style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="head-content">
            <div class="logo-add">
                <img src="assets/images/logo.png" alt="">
                <h2>Hay Go <br> Car Rental</h2>
            </div>
        </div>
        <div class="admin-info">
            <div class="adcont">
                <div class="adicon">
                    <i class="fa-solid fa-user-secret"></i>
                </div>
                <div class="adname">
                    <p><?= $_SESSION['name']; ?></p>
                </div>
            </div>
            <div class="logout">
                <button onclick="window.location.href='logout.php'">Log Out</button>
            </div>
        </div>
    </header>
    <main>
        <div class="box">
            <span>This is an admin page</span>
            <h1>Unta ako nalang - Jerreh</h1>
        </div>
    </main>
</body>
</html>