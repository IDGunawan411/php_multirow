<?php 
include "koneksi.php";

$strow = mysqli_query($koneksi,"SELECT * FROM row ORDER BY id DESC");
$trow=mysqli_fetch_array($strow);

$ex_nama   = explode("-",$trow['nama_row']);
$nama      = $ex_nama[1] + 1;
$ex_alamat = explode("-",$trow['nama_row2']);
$alamat    = $ex_alamat[1] + 1;

mysqli_query($koneksi,"INSERT INTO `row` (`id`, `nama_row`, `nama_row2`, `isi_row`, `isi_row2`) 
VALUES (NULL, 'nama-$nama', 'alamat-$alamat', '<input type=\'text\' class=\'form-control\' value=\'\' name=\'nama$nama\'>', '<input type=\'text\' class=\'form-control\' value=\'\' name=\'alamat$alamat\'>')");
header("location:input.php");

?>