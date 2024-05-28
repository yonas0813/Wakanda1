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
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
<div class="content">
    <h2>Welcome to My Dashboard, <?php echo $_SESSION['username'];?></h2>
    <div class="card">
    <div class="container">
    <?php
$data = mysqli_query($koneksi,"select count(*) as tot from admin");
$d = mysqli_fetch_array($data);
    ?>
    <h2>Jumlah Pengguna</h2>
    <h2><?= $d['tot'];?></h2>
</div>
</div>
</div>

</body>
</html>