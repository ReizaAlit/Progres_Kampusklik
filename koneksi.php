<?php

    $hostname = "localhost";
    $user = "root";
    $password = "";
    $db = "pbw";

    $koneksi =  mysqli_connect($hostname, $user, $password, $db) or die (mysqli_connect());

    // if($koneksi == true){
    //     echo "Koneksi berhasil";
    // }else{
    //     echo "Koneksi gagal";
    // }

    ?>