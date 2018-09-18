<?php 
    $val_10	= $_POST['data_pin_10'];
    $host	="localhost"; 
    $user	="root"; 
    $pass	=""; 
    $db		="iot"; 
    $conn_10 	= mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");
    $mysqli_10	= "INSERT INTO pin_10 (id,pin_value) VALUES (NULL, '$val_10')";    
    $result	= mysqli_query($conn_10, $mysqli_10);  
    echo "Input berhasil 10 : ";         
    mysqli_close($conn_10);
    echo "$val_10";
?>
