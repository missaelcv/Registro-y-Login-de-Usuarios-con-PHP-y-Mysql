<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php require 'partials/header.php' ?>

<h2>SignUp </h2>
<span> or <a href="login.php">Login</a></span>
<form action="login.php" method="post">
    <input type="text" name="email" placeholder="Enter your Mail">
    <input type="password" name="password" placeholder="Enter Your Passoword">
    <input type="password" name="confirm_password" placeholder="Enter Your Passoword">
    <input type="submit" value="send">
    </form>

    
</body>
</html>