<?php
$email = $_POST['email'];
$username = $_POST['username'];
$password1 = $_POST['pass1'];
$status = "user";
if ($password1 == $password1){
include "koneksi.php";

    $passmd = $password1; 

    $query= "INSERT INTO tbl_register VALUES('$email','$username', '$passmd')"; 
    $query2= "INSERT INTO tbl_login VALUES('$username', '$passmd', '$status')"; 
    $query3= "INSERT INTO tbl_user(email,username_user,password_user) VALUES('$email','$username', '$passmd')"; 
    $hasil = mysqli_query($koneksi_db, $query);
    $hasil2 = mysqli_query($koneksi_db, $query2);
    $hasil3 = mysqli_query($koneksi_db, $query3);

    if ($hasil) header('location: login.php');
    else header('location: register.php');
}
else echo "password yang dimasukkan tidak sama";
?>