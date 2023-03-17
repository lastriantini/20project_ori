<?php

$pinsil = $_GET['pinsil'];
    $server = mysqli_connect("localhost","root","","tuhgas");
    echo "$pinsil";
 
    $sql = "DELETE FROM tugas WHERE pinsil = '$pinsil'";

    $query = mysqli_query($server, $sql);
     if ($query) {
        echo " Data berhasil dihapus!";
        echo "<a href='index.php'> Tampilkan Data</a>";
    } else {
        echo "Penghapusan gagal sebab : <br>".mysqli_error($server);
    }

?>