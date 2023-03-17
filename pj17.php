<?php
$conn = mysqli_connect("localhost","root","","tuhgas");
$barang= "SELECT * FROM tugas";
$query = mysqli_query($conn, $barang);
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
    <thead>
        <tr>pinsil</tr>
        <tr>buku</tr>
        <tr>pupen</tr>
    </thead>
    <tbody>
        <?php  while ($barang = mysqli_fetch_array($query))
     { ?>
     <ul>
        <li><?=$barang["pinsil"]?></li>
        <li><?=$barang["buku"]?></li>
        <li><?=$barang["pupen"]?></li>
        </ul>
    </tbody>
    <?php }?>
</body>
</html>