<?php
session_start();
    if(isset($_SESSION["mail"])) {
        header("location:tampil.php");
        
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
    <form action="tampil.php" method="post">
        <label for="">EMail</label>
        <input type="text" name="mail">
        <label for="">pass</label>
        <input type="password" name="pass">
        <button type="submit">Login</button>
    </form>
</body>
</html>