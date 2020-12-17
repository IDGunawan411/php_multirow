<?php 
include "koneksi.php";

$strow = mysqli_query($koneksi,"SELECT * FROM row ORDER BY id DESC");
$trow=mysqli_fetch_array($strow);
$id = $trow['id'];

mysqli_query($koneksi,"DELETE FROM row WHERE id = '$id'");
header("location:input.php");

?>