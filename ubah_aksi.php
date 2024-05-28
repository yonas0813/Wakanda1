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

mysqli_query($koneksi,"UPDATE profil SET id_admin='$id1', sejarah ='$nama', visi='$alamat', misi='$pekerjaan', email='$email', no_hp='$hp' WHERE id_profil='$id'");
 
header("location:PROFIL1.php");
}
?>