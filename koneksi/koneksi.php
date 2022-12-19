<?php
$koneksi = mysqli_connect("localhost","root","","dapur_nawa3");
//cek koneksi
if (!$koneksi){
    die("Error koneksi: " . mysqli_connect_errno());
}
?>