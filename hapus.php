<?php
include "koneksi.php";
    $stb = mysqli_query($koneksi,"SELECT * FROM biodata");
    while($tb  = mysqli_fetch_array($stb)){
        mysqli_query($koneksi,"DELETE FROM biodata WHERE id='$tb[id]'");
    }
    $strow = mysqli_query($koneksi,"SELECT * FROM row");
    while($trow  = mysqli_fetch_array($strow)){
        mysqli_query($koneksi,"DELETE FROM row WHERE id='$trow[id]'");
    }
    header("location:input.php");
?>