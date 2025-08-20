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
    <title>Fleet Owner Page</title>
    <link rel="stylesheet" href="assets/css/style.css"> 
</head>
<body style="background: #fff">
    <div class="box">
        <h1>Welcome <span></span></h1>
        <p>This is an <span> fleet owner </span>page</p>
        <button onclick="window.location.href='logout.php'">Log Out</button>
    </div>
</body>
</html>