<?php
include 'config.php';
session_start();

$error = '';
$validate = '';
if( isset($_SESSION['username']) ) header('Location: login.php');
//mengecek apakah data username yang diinpukan user kosong atau tidak
if( isset($_POST['submit']) ){
        
        // menghilangkan backshlases
        $id = stripslashes($_POST['id_admin']);
        //cara sederhana mengamankan dari sql injection
        $id = mysqli_real_escape_string($koneksi, $id);
        $username = stripslashes($_POST['username']);
        //cara sederhana mengamankan dari sql injection
        $username = mysqli_real_escape_string($koneksi, $username);
        $name     = stripslashes($_POST['nama']);
        $name     = mysqli_real_escape_string($koneksi, $name);
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($koneksi, $password);
        //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
        if(!empty(trim($name)) && !empty(trim($username)) && !empty(trim($password))){
            //mengecek apakah password yang diinputkan sama dengan re-password yang diinputkan kembali
                //memanggil method cek_nama untuk mengecek apakah user sudah terdaftar atau belum
                
                    //hashing password sebelum disimpan didatabase
                    $pass  = $password;
                    //insert data ke database
                    $query = "INSERT INTO admin (id_admin,nama,username, password ) VALUES ('$id','$name','$username','$pass')";
                    $result   = mysqli_query($koneksi, $query);
                    //jika insert data berhasil maka akan diredirect ke halaman index.php serta menyimpan data username ke session
                    if ($result) {
                        $_SESSION['username'] = $username;
                       
                        header('Location: login.php');
                    
                    //jika gagal maka akan menampilkan pesan error
                    } else {
                        $error =  'Register User Gagal !!';
                    }
            
        }else {
            $error =  'Data tidak boleh kosong !!';
        }
    } 
    ?>