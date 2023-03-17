<?php
session_start();

if(!isset($_SESSION["mail"])) {
    header("location:tampil.php");
}

$mail= $_POST['mail'];
$pass= $_POST["pass"];
echo "$mail";
echo "$pass";