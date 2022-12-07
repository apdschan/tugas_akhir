<?php
include "koneksi.php";
$user=$_GET['username_user'];
$queryy="DELETE FROM tbl_user where username_user='$user'"; 
$hasill=mysqli_query($koneksi_db, $queryy); 
if ($hasill) {
?> 
<script language="javascript">document.location.href="ban user.php";</script>
<?php
}else{
echo "gagal hapus data";
}
?>