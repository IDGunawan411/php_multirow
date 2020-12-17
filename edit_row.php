<?php
include "koneksi.php";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $strow = mysqli_query($koneksi,"SELECT * FROM biodata");
    $no=1;
    $no1=1;
    while($trow  = mysqli_fetch_array($strow)){
        // echo $trow['id'];
        $nama = $_POST["nama".$no++];
        $alamat = $_POST["alamat".$no1++];
        mysqli_query($koneksi," UPDATE biodata SET nama='$nama', alamat='$alamat' WHERE id='$trow[id]'");
    }
    header("location:input.php");
}
?>