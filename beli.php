<?php
include("koneksi.php");
if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
  session_start();
  $sesi = $_SESSION['user'];
  $id = $_GET['id'];
$result   = mysqli_query($Koneksi, "select stok from barang where id = $id");
$row=mysqli_fetch_array($result,MYSQLI_NUM);
$stok = $row['stok'];

$beli = "UPDATE barang SET stok='$stok-1' WHERE user=$user";

if ($Koneksi->query($beli) === TRUE) {
echo "<script type='text/javascript'>alert('berhasil beli');</script>";
 } else {
echo "Gagal menambahkan: ";
 }
 }
 else{
   echo "<script type='text/javascript'>alert('Login Dulu');</script>";
 }

?>
