<?php
$koneksi = mysqli_connect("localhost","root","root","dapur_nawa2");
//cek koneksi
if (!$koneksi){
    die("Error koneksi: " . mysqli_connect_errno());
}
?>