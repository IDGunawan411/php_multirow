<?php
include "koneksi.php";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $strow = mysqli_query($koneksi,"SELECT COUNT(id) as total_row FROM row");
    $trow  = mysqli_fetch_array($strow);
    $total_row = $trow['total_row'];

    for($i = 1; $i <= $total_row;$i++){
        $nama = $_POST["nama$i"];
        $alamat = $_POST["alamat$i"];
        if($_POST["nama$i"]==!NULL && $_POST["alamat$i"]==!NULL){
            mysqli_query($koneksi,"INSERT INTO `biodata` (`id`, `nama`, `alamat`) VALUES (NULL, '$nama', '$alamat')");
        }
    }
    header("location:input.php");
}
?>