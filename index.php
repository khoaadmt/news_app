<?php
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        header('Location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Welcome !</h3>
    <?php
        include('config/config.php');
        include('modules/header.php');
        include('modules/menu.php');
        include('modules/main.php');
        include('modules/footer.php');
    ?>
</body>
</html>