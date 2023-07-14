<?php
    $host       = "localhost";
    $user       = "root";
    $password   = "";
    $namadb     = "kampunghalaman";

    $varkoneksi=mysqli_connect($host,$user,$password,$namadb);

    if(!$varkoneksi){
        echo "tidak koneksi";
    }
?>