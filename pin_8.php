<?php 
    $val_8	= $_POST['data_pin_8'];
    $host	="localhost"; 
    $user	="root"; 
    $pass	=""; 
    $db		="iot"; 
    $conn_8 	= mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");
    $mysqli_8	= "INSERT INTO pin_8 (id,pin_value) VALUES (NULL, '$val_8')";    
    $result	= mysqli_query($conn_8, $mysqli_8);  
    echo "Input berhasil 8 : ";         
    mysqli_close($conn_8);
    echo "$val_8";
?>
