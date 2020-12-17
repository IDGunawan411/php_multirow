<?php
include "koneksi.php";
    $strow = mysqli_query($koneksi,"SELECT * FROM biodata");
    while($trow  = mysqli_fetch_array($strow)){
        mysqli_query($koneksi,"DELETE FROM biodata WHERE id='$trow[id]'");
    }
    header("location:input.php");
?>