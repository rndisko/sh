<?php
    include "connection.php";
    $val_13	= $_REQUEST['pin_value_13'];
    $conn 	= mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");
    $mysqli	= "INSERT INTO pin_13 (id,pin_value) VALUES (NULL, '$val_13')";
    $result	= mysqli_query($conn, $mysqli);

    echo "Input berhasil";

    mysqli_close($conn);
?>