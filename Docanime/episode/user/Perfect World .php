<!DOCTYPE html>
<html>
<head>
    <title>Docanime</title>
    <script src = "slider.js" defer></script>
    <link rel="stylesheet" type="text/css" href="../../css/styles.css">
    <link rel="stylesheet" type="text/css" href="../../css/cards.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inria+Sans&display=swap" rel="stylesheet">
</head>
<body>
<?php
include "../../koneksi.php"; //panggil file koneksi
$query="SELECT * FROM  tbl_film where nama_film = 'Perfect World ' and episode = '1'"; //buat query sql
$hasil= mysqli_query($koneksi_db,$query);
$data=mysqli_fetch_array($hasil);
$gdrive = $data['link_gdrive'];
?>
<?php
include "../../koneksi.php"; //panggil file koneksi
$query2="SELECT * FROM  tbl_komentar"; //buat query sql
$hasil2= mysqli_query($koneksi_db,$query2);
$data2=mysqli_fetch_array($hasil2);
?>
<section aria_label="Animehh">
<div class = "banner">
    <button  class = "Banner-button prev" data-Banner-button = "prev"><a href = "../../user/homepage/ListGenre.php"><img src = "../../img/Back.png" width="40px"></img></a></button>
    <button class = "Banner-button next" data-Banner-button = "next"><a href = "../../user/homepage/Homepage.php"><img src = "../../img/home.png" width="40px" ></img></a></button>
        <span class = "Terpopuler">
        <table border = "0px" cellspacing ="8px">
            <tr><td><?php echo $data['nama_film']?></td></tr>
        </table>
        <table cellspacing = "10px" class = "table">
        <tr><td><button class = "Genre" ><?php echo $data['genre1']?></button></td><td></td><td><button class = "Genre2" ><?php echo $data['genre2']?></td><td></td></button><td><button class = "Genre3" ><?php echo $data['genre3']?></button></td></tr>
        </table>
        <table class = "tablee">
        <tr><td><ul type = circle><li class = "teks"><?php echo $data['status_film']?></li></ul><td><ul type = circle><li class = "teks"><?php echo $data['tanggal_rilis']?></li></ul></td></tr>
        </table>
        <table class = "tableee"><tr><td></td></tr>
        <tr><td><ul type = circle><li class = "teks"><?php echo 'Studio Film'.  ' : ' . $data['studio_film'];?></li></ul></tr>
        </table>
        <table class = "tableeee">
        <tr><td><button class = "Genreee" >Rating <?php echo $data['rating_film']?></button></td></tr>
        </table>
        </span>
                    <?php $banner = "../../img/" . $data['banner_film'];echo "<img src = '$banner'></img>" ?>
</div>
<?php $cover = "../../img/" . $data['cover_film'];
 echo "<img src = '$cover' alt = Xiao class = cover></img>" ?>
</section>
<div>
<center>
<table class = "hr"cellspacing = "0" border = "0px">
<tr><td>Sinopsis</td></tr>
<tr>
    <td><hr color = red width= "75vw"></td>
    <td><hr color = #161414 width= "700vw"></td>
</tr><center>
</table>
<table class = "sinopsis">
<tr><th><h2><?php echo $data['nama_film']?></h2></th></tr>
<tr><td><?php echo $data['sinopsis_film'] ?></td></tr>
</table>
<table border = "0px" width = "60%">
<tr><td>
<button  class = "prev2"><img src = "../../img/Back.png" width="40px"></img></button></td><td>
<?php
$vid = $data['video_episode'];
echo "<center><span><h3>Episode 1</h3></span></center><iframe src= $vid width= 800 height= 480 style= 'border:none'></iframe>";?></td>
<td><button class = "next2"><img src = "../../img/Next.png" width="40px" ></img></button></td>
</tr>
</table>
</center>
<table class = "list">
    <tr><td class= "merah">List Episode</td><td class= "hitam"><?php echo $data['nama_film']?></td></tr>
</table>
<center>
<table class = "listepsd2">
    <tr><th class = "ireng">Episode</th><th width = "33.5%">Nama Film</th><th width = "19.5%">Subtitle</th><th>Tanggal Rilis</th></tr></table>
<div class = "listcont">
<table class = "listepsd" border= "0px">
    <tr class = "ireng"><td class = "ireng"><?php echo $data['episode'];?></td><td><?php echo $data['nama_film'];?></td><td>Indonesia</td><td><?php echo $data['tanggal_rilis'];?></td></tr>
    <tr class = "ireng"><td class = "ireng2">2</td><td class = "ireng2"><?php echo $data['nama_film'];?></td><td class = "ireng2">Indonesia</td><td class = "ireng2">Segera Hadir</td></tr>
    <tr class = "ireng"><td class = "ireng">3</td><td><?php echo $data['nama_film'];?><td>Indonesia</td><td>Segera Hadir</td></tr>
    <tr class = "ireng"><td class = "ireng2">4</td><td class = "ireng2"><?php echo $data['nama_film'];?></td><td class = "ireng2">Indonesia</td><td class = "ireng2">Segera Hadir</td></tr>
    <tr class = "ireng"><td class = "ireng">5</td><td><?php echo $data['nama_film'];?><td>Indonesia</td><td>Segera Hadir</td></tr>
    <tr class = "ireng"><td class = "ireng2">6</td><td class = "ireng2"><?php echo $data['nama_film'];?></td><td class = "ireng2">Indonesia</td><td class = "ireng2">Segera Hadir</td></tr>
    <tr class = "ireng"><td class = "ireng">7</td><td><?php echo $data['nama_film'];?><td>Indonesia</td><td>Segera Hadir</td></tr>
    <tr class = "ireng"><td class = "ireng2">8</td><td class = "ireng2"><?php echo $data['nama_film'];?></td><td class = "ireng2">Indonesia</td><td class = "ireng2">Segera Hadir</td></tr>
</table>
</div>
</center>
<table class = "list">
    <tr><td class= "merah">Download</td><td class= "hitam"><?php echo $data['nama_film'] . "  Episode  " .  $data['episode']?></td></tr>
</table>
<table class = "listepsd3" border ="0px">
    <tr><th class = "ireng">Media</th><th width = "23%">Resolusi</th><th width = "23.5%">Resolusi</th></tr>
</table>
<table class = "listepsd4" border = "0px">
    <tr><td class = "ireng3" width = "18%">Gdrive</th><td class = "ireng" width = "23%"><a style = "text-decoration:none;color:white" href = '<?php $gdrive ?>'>480p</a></th><td class = "ireng" width = "23.5%"><a style = "text-decoration:none;color:white" href = '<?php $gdrive ?>'>720p</a></th></tr>
    <tr><td class = "ireng3" width = "18%">Mediafire</th><td class = "ireng" width = "23%">480p</th><td class = "ireng" width = "23.5%">720p</th></tr>
    <tr><td class = "ireng3" width = "18%">Zippyshare</th><td class = "ireng" width = "23%">480</th><td class = "ireng" width = "23.5%">720p</th></tr>
</table>
<table class = "list">
    <tr><td class= "merah">Komentar</td><td class= "hitam"><?php echo $data['nama_film'] . "  Episode  " .  $data['episode']?></td></tr>
</table>
<form class = "woe" method = 'POST'>
<table border = "0px" cellspacing = "9">
<tr><td rowspan = "3"  class = "hooh"><img class = "img" src = "../../img/logod.png" width = "60px"></img></td><td width = '91.3%'>User1</td></tr>
<tr><td><textarea rows = 1 class = "inputt" name = 'komen'></textarea><input type = "submit" class = "kirimm" value = "kirim" name = 'kirim'></input></td><tr>
<?php
error_reporting(0);
include '../koneksi.php';
$isi=$_POST['komen']; 
$nama_film = 'Perfect World ';
$eps = '1';
@$kirim =$_POST['kirim'];
$query="INSERT INTO tbl_komentar (id_komentar,nama_film,episode,username,isi_komentar) VALUES (id_komentar,'$nama_film','$eps','User1','$isi')";
$hasil=mysqli_query($koneksi_db, $query); 
?>
<?php
include "../koneksi.php"; 
$query3="SELECT * FROM  tbl_komentar where nama_film = 'Perfect World ' and episode = '1' and isi_komentar != ''"; 
$hasil3= mysqli_query($koneksi_db,$query3);
if ($hasil3 !== ""){
while($data2=mysqli_fetch_array($hasil3)){
?>
<tr><td rowspan = "3"  class = "hooh"><img class = "imgg" src = "../../img/logod.png" width = "60px"></img></td><td width = '91.3%'><?php echo $data2['username']?></td></tr><tr><td class = "issi"><?php echo $data2['isi_komentar'];?></td><tr>
<?php
}};
?>
</table>
</form><!-- Rekomendasi Film -->

<div class = Judul2>Rekomendasi</div>
<section class = "sec">
<div class = "containerr">
    <?php
                                include "koneksi.php"; //panggil file koneksi
                                $query="SELECT * FROM  tbl_film where jenis_film = 'Rekomendasi' and episode = '1' and nama_film = 'Tales of Demons and God 5'"; //buat query sql
                                $hasil= mysqli_query($koneksi_db,$query);
                                while ($data=mysqli_fetch_array ($hasil)){?>
    <div class = "conent4">
        <div class = "card">
            <div class = "card-content"> 
                <div class = "images">
                    <?php $cover = "../../img/" . $data['cover_film'];echo "<img src = '$cover'></img>" ?>
                </div>
                <div class = "Judul film">
                    <table><tr><td width = "200px">
                    <span class = "Nama"><?php echo $data['nama_film'] ?></td>
                    <td width = "70px"><input type = "submit" class = "Rating" value = "<?php echo $data['rating_film'] ?>"></input></td></tr></table></span>
                    <table class = "li">
                    <tr>
                    <td><span class = "Nama"><li type = "circle" class = "li"><?php echo $data['tanggal_rilis'] ?></li></span></td><td width = "10%"></td>
                    <td><span class = "Nama"><li type = "circle" class = "li"><?php echo $data['status_film'] ?></li></span></td>
                    </tr>
                    </table>
                    <button class = "tonton" ><?php $link = $data['nama_film']; echo "<a href = '../../episode/user/$link .php'><img src = ../../img/Next.png width=20px ></img></a>";?></button>
                </div>
            </div>
        </div>
    </div><?php } ?>
    <?php
                                include "koneksi.php"; //panggil file koneksi
                                $query="SELECT * FROM  tbl_film where jenis_film = 'Rekomendasi' and episode = '1' and nama_film != 'Tales of Demons and God 5'"; //buat query sql
                                $hasil= mysqli_query($koneksi_db,$query);
                                while ($data=mysqli_fetch_array ($hasil)){?>
    <div class = "conent3">
        <div class = "card">
            <div class = "card-content"> 
                <div class = "images">
                    <?php $cover = "../../img/" . $data['cover_film'];echo "<img src = '$cover'></img>" ?>
                </div>
                <div class = "Judul film">
                    <table><tr><td width = "200px">
                    <span class = "Nama"><?php echo $data['nama_film'] ?></td>
                    <td width = "70px"><input type = "submit" class = "Rating" value = "<?php echo $data['rating_film'] ?>"></input></td></tr></table></span>
                    <table class = "li">
                    <tr>
                    <td><span class = "Nama"><li type = "circle" class = "li"><?php echo $data['tanggal_rilis'] ?></li></span></td><td width = "10%"></td>
                    <td><span class = "Nama"><li type = "circle" class = "li"><?php echo $data['status_film'] ?></li></span></td>
                    </tr>
                    </table>
                    <button class = "tonton" ><?php $link = $data['nama_film']; echo "<a href = '../../episode/user/$link .php'><img src = ../../img/Next.png width=20px ></img></a>";?></button>
                </div>
            </div>
        </div>
    </div><?php } ?>
</div>
</section>
<div class = "footer">
<table border = "0">
<tr>
<td  width = "40px">
<div class = "foot">Docanime</td><td width = "100%" align= "right">
<img class = "Icon1" src = "../../img/Wa.png" width = "30px"></img>
<img class = "Icon2" src = "../../img/Youtube.png" width = "30px"></img>
<img class = "Icon3" src = "../../img/Ig.png" width = "30px"></img>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>