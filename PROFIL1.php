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
    <a href="tambah.php" class="btn btn-primary">Tambah</a>
    <a href="cetak.php" class="btn btn-success">Cetak</a>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Sejarah</th>
            <th>Visi</th>
            <th>Misi</th>
            <th>Email</th>
            <th>No Hp</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php 
		include 'config.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from profil inner join admin on admin.id_admin=profil.id_admin");
		while($d = mysqli_fetch_array($data)){
			?>
            <tr>
            <td><?php echo $no++; ?></td>
				<td><?php echo $d['sejarah']; ?></td>
				<td><?php echo $d['visi']; ?></td>
				<td><?php echo $d['misi']; ?></td>
                <td><?php echo $d['email']; ?></td>
				<td><?php echo $d['no_hp']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id_profil']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id_profil']; ?>">HAPUS</a>
				</td>
            </tr>
            <?php } ?>
    </tbody>
   </table>
    <!-- Place your content here -->
</div>

</body>
</html>