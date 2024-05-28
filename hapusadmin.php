<?php 
include 'config.php';
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM admin WHERE id_admin='$id'")or die(mysqli_error());
 
header("location:admin.php");
?>