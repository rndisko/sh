<?php 
    $val_9	= $_POST['data_pin_9'];
    $host	="localhost"; 
    $user	="root"; 
    $pass	=""; 
    $db		="iot"; 
    $conn_9 	= mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");
    $mysqli_9	= "INSERT INTO pin_9 (id,pin_value) VALUES (NULL, '$val_9')";    
    $result	= mysqli_query($conn_9, $mysqli_9);  
    echo "Input berhasil 9 : ";         
    mysqli_close($conn_9);
    echo "$val_9";
?>
