<?php 
include "koneksi.php"; 
$nama_film=$_POST['Nama'];
$Studio=$_POST['studio']; 
$rate=$_POST['rating'];
$gdrive=$_POST['link1']; 
$zippy=$_POST['link2']; 
$mediafire=$_POST['link3']; 
$videps=$_POST['eps']; 
$jenis=$_POST['jenis']; 
$Cover1=$_POST['covg']; 
$Hari=$_POST['hari'];
$Genre1=$_POST['genre1']; 
$Genre2=$_POST['genre2']; 
$Genre3=$_POST['genre3']; 
$Banner=$_POST['banner']; 
$Cover2=$_POST['covi']; 
$Sinopsis=$_POST['sinopsis']; 
$Status=$_POST['statuss']; 
$tanggal=$_POST['tgl']; 
$eps=$_POST['Episode'];

$query="UPDATE tbl_film SET episode='$eps',video_episode = '$videps',nama_film = '$nama_film',jenis_film = '$jenis',banner_film = '$Banner',cover_video = '$Cover2',tanggal_rilis = '$tanggal',status_film = '$Status',studio_film= '$Studio',rating_film = '$rate',cover_film = '$Cover1',genre1 = '$Genre1',genre2 = '$Genre2',genre3 = '$Genre3',sinopsis_film = '$Sinopsis',link_gdrive = '$gdrive',link_zippy = '$zippy',link_mediafire = '$mediafire' WHERE nama_film='$nama_film'";
$hasil=mysqli_query($koneksi_db, $query);
if ($hasil) { 
    header('location:index.php');
}else{
echo "Gagal update data";
echo mysqli_error();
}
?>