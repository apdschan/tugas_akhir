<!DOCTYPE html>
<html>
<head>
    <title>Docanime</title>
    <script src = "slider.js" defer></script>
    <link rel="stylesheet" type="text/css" href="css/cs.css">
    <link rel="stylesheet" type="text/css" href="css/crd.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inria+Sans&display=swap" rel="stylesheet">
</head>
<body>
<?php
include "koneksi.php"; //panggil file koneksi
$query="SELECT * FROM  tbl_film where nama_film = 'Soulland Season 2'"; //buat query sql
$hasil= mysqli_query($koneksi_db,$query);
$data=mysqli_fetch_array($hasil);
?>
<?php
include "koneksi.php"; //panggil file koneksi
$query2="SELECT * FROM  tbl_komentar"; //buat query sql
$hasil2= mysqli_query($koneksi_db,$query2);
$data2=mysqli_fetch_array($hasil2);
?>
<section aria_label="Animehh">
<div class = "banner">
    <button  class = "Banner-button prev" data-Banner-button = "prev"><a href = "Homepage.php"><img src = "img/Back.png" width="40px"></img></a></button>
    <button class = "Banner-button next" data-Banner-button = "next"><img src = "img/home.png" width="40px" ></img></button>
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
        <img src = "Soul.jpg" alt = "Soulland"></img>
</div>
<img src = "can.jpg" alt = "Xiao wu" class = "cover"></img>
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
<tr><td><?php echo $data['sinopsis_film'] ?>mengisahkan tentang Tang San yang dikenal sebagai salah satu murid klan seni bela diri Sekte Tan yang paling bergengsi dan belum ada yang bisa menandingi penggunaan senjatanya.

Dengan begitu, tentunya membuat anggota sekte percaya ia akan memiliki masa depan yang sangat cerah. Ia bahkan dapat menguasai ilmu rahasia sekte Tang, namun ternyata Tang San malah memilih untuk meninggalkan kehidupan itu.


Tang kemudian reinkarnasi di dunia roh, Soul Land, dimana orang terkuat akan hidup dan yang sangat lemah akan mati. Setiap orang yang lahir di Soul Land memiliki roh bawaan, bagi mereka yang terlahir dengan roh yang kuat, ini bisa ditingkatkan kemampuannya hingga menjadi seorang Master Roh.</td></tr>
</table>
<table border = "0px" width = "60%">
<tr><td>
<button  class = "prev2"><img src = "img/Back.png" width="40px"></img></button></td><td>
<?php
$vid = 'https://drive.google.com/file/d/1t3gust4PWUhojgHrf9L7Qa89mX5ihFHx/preview';
echo "<iframe src= $vid width= 800 height= 480 ></iframe>";?></td>
<td><button class = "next2"><img src = "img/Next.png" width="40px" ></img></button></td>
</tr>
</table>
</center>
<table class = "list">
    <tr><td class= "merah">List Episode</td><td class= "hitam"><?php echo $data['nama_film']?></td></tr>
</table>
<center>
<table class = "listepsd2">
    <tr><th class = "ireng">Episode</th><th width = "33.5%">Judul</th><th width = "19.5%">Subtitle</th><th>Tanggal Rilis</th></tr></table>
<div class = "listcont">
<table class = "listepsd" border= "0px">
    <tr class = "ireng"><td class = "ireng">1</td><td>Soulland Season 2</td><td>Indonesia</td><td>20 April 2020</td></tr>
    <tr class = "ireng"><td class = "ireng2">1</td><td class = "ireng2">Soulland Season 2</td><td class = "ireng2">Indonesia</td><td class = "ireng2">20 April 2020</td></tr>
    <tr class = "ireng"><td class = "ireng">1</td><td>Soulland Season 2</td><td>Indonesia</td><td>20 April 2020</td></tr>
    <tr class = "ireng"><td class = "ireng2">1</td><td class = "ireng2">Soulland Season 2</td><td class = "ireng2">Indonesia</td><td class = "ireng2">20 April 2020</td></tr>
    <tr class = "ireng"><td class = "ireng">1</td><td>Soulland Season 2</td><td>Indonesia</td><td>20 April 2020</td></tr>
    <tr class = "ireng"><td class = "ireng2">1</td><td class = "ireng2">Soulland Season 2</td><td class = "ireng2">Indonesia</td><td class = "ireng2">20 April 2020</td></tr>
    <tr class = "ireng"><td class = "ireng">1</td><td>Soulland Season 2</td><td>Indonesia</td><td>20 April 2020</td></tr>
    <tr class = "ireng"><td class = "ireng2">1</td><td class = "ireng2">Soulland Season 2</td><td class = "ireng2">Indonesia</td><td class = "ireng2">20 April 2020</td></tr>
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
    <tr><td class = "ireng3" width = "18%">Media</th><td class = "ireng" width = "23%">480p</th><td class = "ireng" width = "23.5%">720p</th></tr>
    <tr><td class = "ireng3" width = "18%">Media</th><td class = "ireng" width = "23%">480p</th><td class = "ireng" width = "23.5%">720p</th></tr>
    <tr><td class = "ireng3" width = "18%">Media</th><td class = "ireng" width = "23%">480</th><td class = "ireng" width = "23.5%">720p</th></tr>
</table>
<!-- Rekomendasi Film -->

<div class = Judul2>Rekomendasi</div>
<section class = "sec">
<div class = "container2">
    <div class = "conent3">
        <div class = "card">
            <div class = "card-content">
                <div class = "images">
                    <img src = "PR.jpg"></img>
                </div>
                <div class = "Judul film">
                    <table><tr><td width = "200px">
                    <span class = "Nama">Purple River</td>
                    <td width = "70px"><input type = "submit" class = "Rating" value = "9.00 "></input></td></tr></table></span>
                    <table class = "li">
                    <tr>
                    <td><span class = "Nama"><li type = "circle" class = "li">2 April 2000</li></span></td><td width = "10%"></td>
                    <td><span class = "Nama"><li type = "circle" class = "li">Sedang berlangsung</li></span></td>
                    </tr>
                    </table>
                    <button class = "tonton" ><img src = "Next.png" width="20px" ></img></button>
                </div>
            </div>
        </div>
    </div>
    <div class = "conent4">
        <div class = "card">
            <div class = "card-content">
                <div class = "images">
                    <img src = "TODG5.jpg"></img>
                </div>
                <div class = "Judul film">
                    <table><tr><td width = "200px">
                    <span class = "Nama">Tales of Demons and God</td>
                    <td width = "70px"><input type = "submit" class = "Rating" value = "9.00 "></input></td></tr></table></span>
                    <table class = "li">
                    <tr>
                    <td><span class = "Nama"><li type = "circle" class = "li">2 April 2000</li></span></td><td width = "10%"></td>
                    <td><span class = "Nama"><li type = "circle" class = "li">Sedang berlangsung</li></span></td>
                    </tr>
                    </table>
                    <button class = "tonton" ><img src = "Next.png" width="20px" ></img></button>
                </div>
            </div>
        </div>
    </div>
    <div class = "conent3">
        <div class = "card">
            <div class = "card-content">
                <div class = "images">
                    <img src = "Sup.jpg"></img>
                </div>
                <div class = "Judul film">
                    <table><tr><td width = "200px">
                    <span class = "Nama">Supreme Galaxy</td>
                    <td width = "70px"><input type = "submit" class = "Rating" value = "9.00 "></input></td></tr></table></span>
                    <table class = "li">
                    <tr>
                    <td><span class = "Nama"><li type = "circle" class = "li">2 April 2000</li></span></td><td width = "10%"></td>
                    <td><span class = "Nama"><li type = "circle" class = "li">Sedang berlangsung</li></span></td>
                    </tr>
                    </table>
                    <button class = "tonton" ><img src = "Next.png" width="20px" ></img></button>
                </div>
            </div>
        </div>
    </div>
    <div class = "conent3">
        <div class = "card">
            <div class = "card-content">
                <div class = "images">
                    <img src = "Wond.jpg"></img>
                </div>
                <div class = "Judul film">
                    <table><tr><td width = "200px">
                    <span class = "Nama">Wonderland 5</td>
                    <td width = "70px"><input type = "submit" class = "Rating" value = "9.00 "></input></td></tr></table></span>
                    <table class = "li">
                    <tr>
                    <td><span class = "Nama"><li type = "circle" class = "li">2 April 2000</li></span></td><td width = "10%"></td>
                    <td><span class = "Nama"><li type = "circle" class = "li">Sedang berlangsung</li></span></td>
                    </tr>
                    </table>
                    <button class = "tonton" ><img src = "Next.png" width="20px" ></img></button>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<div class = "footer">
<table border = "0">
<tr>
<td  width = "40px">
<div class = "foot">Docanime</td><td width = "100%" align= "right">
<img class = "Icon1" src = "Wa.png" width = "30px"></img>
<img class = "Icon2" src = "Youtube.png" width = "30px"></img>
<img class = "Icon3" src = "Ig.png" width = "30px"></img>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>