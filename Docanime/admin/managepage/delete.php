<?php
include "koneksi.php";
$nama_film=$_GET['nama_film'];
$query="DELETE FROM tbl_film where nama_film='$nama_film'"; 
$hasil=mysqli_query($koneksi_db, $query); 
if ($hasil) {
?> 
<script language="javascript">document.location.href="index.php";</script>
<?php
}else{
echo "gagal hapus data";
}
?>