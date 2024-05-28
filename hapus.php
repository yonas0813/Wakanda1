<?php 
include 'config.php';
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM profil WHERE id_profil='$id'")or die(mysqli_error());
 
header("location:PROFIL1.php");
?>