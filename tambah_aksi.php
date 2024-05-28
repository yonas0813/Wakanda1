<?php 
include 'config.php';
if( isset($_POST['submit']) ){
$nama = $_POST['sejarah'];
$alamat = $_POST['visi'];
$pekerjaan = $_POST['misi'];
$email = $_POST['email'];
$hp = $_POST['no_hp'];
$id = $_POST['id_profil'];
$id1 = $_POST['id_admin'];

 
mysqli_query($koneksi,"INSERT INTO profil VALUES('$id','$id1','$nama','$alamat','$pekerjaan','$email','$hp')");
 
header("location:PROFIL1.php");
}
?>