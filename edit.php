<?php 
include 'config.php';
 
// mengaktifkan session
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="dashboard.css">
</head>
<body>

<div class="sidebar">
   
    <ul>
        <h1> Dashboard </h1>
        <li><a href="dashboard.php">Home</a></li>
        <li><a href="PROFIL1.php">Profil</a></li>
        <li><a href="admin.php">Admin</a></li>
        <li><a href="logout.php">Logout</a></li>
        
    </ul>
</div>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<div class="content">
<?php $data = mysqli_query($koneksi,"select * from profil where id_profil='$_GET[id]'");
		$d = mysqli_fetch_array($data);?>
<form action="ubah_aksi.php?id=<?= $d['id_profil'];?>" method="post">
<div class="form-group">
        <label for="">Nama Admin</label>
        <select name="id_admin" id="provinsi">
  <option disabled selected> Pilih </option>
 <?php 
  $sql=mysqli_query($koneksi,"SELECT * FROM admin");
  while ($data=mysqli_fetch_array($sql)) {
 ?>
   <option value="<?=$data['id_admin']?>"><?=$data['nama']?></option> 
 <?php
  }
 ?>
  </select></div><br><br>

      <div class="form-group">
        <label for="">Sejarah</label>
      <textarea name="sejarah" id=""><?= $d['sejarah'];?></textarea>
    <input type="hidden" value="<?= $d['id_profil'];?>" name="id_profil"></div><br><br>
      <div class="form-group">
        <label for="">Visi</label>
       <textarea name="visi" id=""><?= $d['visi'];?></textarea></div><br><br>
       <div class="form-group">
        <label for="">Misi</label>
       <textarea name="misi" id=""><?= $d['misi'];?></textarea></div><br><br>
       <div class="form-group">
        <label for="">Email</label>
       <input type="email" name="email" value="<?= $d['email'];?>"></div><br><br>
       <div class="form-group">
        <label for="">No Hp</label>
       <input type="text" name="no_hp" value="<?= $d['no_hp'];?>"></div><br><br>
        <button class="btn btn-primary" name="submit">Ubah</button>
      </form>

    <!-- Place your content here -->
</div>

</body>
</html>