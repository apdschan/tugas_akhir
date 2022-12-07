<?php 
session_start();
include "koneksi.php";
$username = $_POST['username']; 
$password = $_POST['sandi'];
$query = "SELECT * FROM tbl_login WHERE username = '$username '";
$hasil = mysqli_query($koneksi_db, $query); 
$data = mysqli_fetch_array($hasil); 

if ($password == $data['password']){

$_SESSION['status'] = $data['status']; 
$_SESSION['username'] = $data['username'];
$_SESSION['sandi'] = $data['password'];

echo "<h2>Login sukses</h2>";
header('location: admin/homepage/Homepage.php');
}else header('location: login2.php');

if ($_SESSION['status'] == "user"){
    header('location: user/homepage/Homepage.php');
}
if ($_SESSION['status'] == "admin"){
    header('location: admin/homepage/Homepage.php');
}
if ($_SESSION['username'] != $data['username']){
    header('location: login2.php');
}

elseif ($_SESSION['sandi'] != $data['password']){
    header('location: login2.php');
}
?>