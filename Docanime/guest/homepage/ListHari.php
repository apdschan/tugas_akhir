<!DOCTYPE html>
<html>
<head>
    <title>Docanime</title>
    <script src = "../../jslider/slider.js" defer></script>
    <link rel="stylesheet" type="text/css" href="../../css/styyle.css">
    <link rel="stylesheet" type="text/css" href="../../css/cardo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inria+Sans&display=swap" rel="stylesheet">
</head>
<body>
<header>
<table border="0px" cellpadding= "1px">
<tr>
<td><img src = "../../img/Logod.png" width="40px"></img></td>
<td><div class = Judul>Docanime</div></td>
<td width="91%"></td>
<td width="10%"><center><button class= crud><a style = "text-decoration:none" href = "../../register.php"  type = "submit" value = "Manage">Register</center></a></button></td>
<td><img src = "../../img/home.png" width="31px"></img></td>
<td><td>
</tr>
</table>
</header>
<section aria_label="Animehh">
<div class = "Banner" data-Banner>
    <button  class = "Banner-button prev" data-Banner-button = "prev"><img src = "../../img/Back.png" width="40px"></img></button>
    <button class = "Banner-button next" data-Banner-button = "next"><img src = "../../img/Next.png" width="40px" ></img></button>
    <ul data-slides>
        <li class = "slide" data-active>
        <span class = "Terpopuler">
        <table border = "0px" cellspacing ="10px">
            <tr><td class = "Red">Anime Paling Populer</td></tr>
            <tr><td>Swallowed Star Season 2</td></tr>
        </table>
        <button class = "Genre" >Aksi</button><button class = "Genre2" >Percintaan</button><button class = "Genre3" >Mekanisme</button>
        <button class = "TontonSekarang">Tonton Sekarang</button>
        <img src = "../../img/Next.png" width="25px" class = "Hehe"></img>
        </span>
        <img src = "../../img/Swallowed.jpg" alt = "Gambar #2"></img>
        </li>
        <li class = "slide">
        <img src = "../../img/BannerBTTH.jpg" alt = "Gambar #1"></img>
        <span class = "Terpopuler">
        <table border = "0px" cellspacing ="10px">
            <tr><td class = "Red">Anime Paling Populer</td></tr>
            <tr><td>Battle Through The Heavens Season 5</td></tr>
        </table>
        <button class = "Genre" >Aksi</button><button class = "Genre2" >Komedi</button>
        <button class = "TontonSekarang">Tonton Sekarang</button>
        <img src = "../../img/Next.png" width="25px" class = "Hehe"></img>
        </span>
        </li>
        <li class = "slide">
        <span class = "Terpopuler">
        <table border = "0px" cellspacing ="10px">
            <tr><td class = "Red">Anime Paling Populer</td></tr>
            <tr><td>Soulland Season 2</td></tr>
        </table>
        <button class = "Genre" >Aksi</button><button class = "Genre2" >Percintaan</button><button class = "Genre3" >Petualangan</button>
        <button class = "TontonSekarang"><a  style = "text-decoration:none; color : white" href = "../../episode/guest/Swallowed Star Season 2 .php">Tonton Sekarang</a></button>
        <img src = "../../img/Next.png" width="25px" class = "Hehe"></img>
        </span>
        <img src = "../../img/SoulBanner.jpg" alt = "Gambar #3"></img>
        </li>
    </ul>
    <div>
</section>
<center>
<table border="0px" cellpadding= "1px">
<tr>
<td width = "10px"><a href = 'Homepage.php'><img src = "../../img/home.png" width="40px"></img></a></td>
<td width = "20px"></td>
<td width = "400px">
<input type = "submit" value = " " class = "submit"></input>
<input type = "text" class = "input" placeholder = "Cari Film"></input>
</td>
<td width="85px"><div class = Judul><center><a  style = "text-decoration:none; color : white"  href = "ListGenre.php">Genre</center></a></div></td>
<td width="190px"><div class = Judul><center><a  style = "text-decoration:none; color : white"  href = "ListHari.php">Hari Diunggah</center></a></div></td>
</tr>
</table>
</center>
<div>
<center>
<table cellspacing = "0" border = "0px">
<tr>
    <td><hr color = red width= "60vw"></td>
    <td><hr color = #161414 width= "700vw"><td>
</tr>
</table>
</div>
<table cellspacing = "3px" align = "center" border = "0">
<tr><td>
<button class = "Genree" ><font size = '3.5px'>Senin</font></button>
<button class = "Genree" ><font size = '3.5px'>Selasa</button>
<button class = "Genree" ><font size = '3.5px'>Rabu</button>
<button class = "Genree" ><font size = '3.5px'>Kamis</button>
<button class = "Genree" ><font size = '3.5px'>Jum'at</button>
<button class = "Genree" ><font size = '3.5px'>Sabtu</button>
<button class = "Genree" ><font size = '3.5px'>Minggu</button>
</td></tr>
</table>
<!-- Senin -->

<div class = Judul2>Senin</div>
<section class = "sec">
<div class = "container2">
    <?php
                                include "koneksi.php"; //panggil file koneksi
                                $query="SELECT * FROM  tbl_film where hari_diunggah = 'Senin'"; //buat query sql
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
                    <button class = "tonton" ><?php $link = $data['nama_film']; echo "<a href = '../../episode/guest/$link .php'><img src = ../../img/Next.png width=20px ></img></a>";?></button>
                </div>
            </div>
        </div>
    </div><?php } ?>
</div>
</section>
<!-- Selasa -->

<div class = Judul2>Selasa</div>
<section class = "sec">
<div class = "container2">
    <?php
                                include "koneksi.php"; //panggil file koneksi
                                $query="SELECT * FROM  tbl_film where hari_diunggah = 'Selasa'"; //buat query sql
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
                    <button class = "tonton" ><?php $link = $data['nama_film']; echo "<a href = '../../episode/guest/$link .php'><img src = ../../img/Next.png width=20px ></img></a>";?></button>
                </div>
            </div>
        </div>
    </div><?php } ?>
</div>
</section>
<!-- Rabu -->

<div class = Judul2>Rabu</div>
<section class = "sec">
<div class = "container2">
    <?php
                                include "koneksi.php"; //panggil file koneksi
                                $query="SELECT * FROM  tbl_film where hari_diunggah = 'Rabu'"; //buat query sql
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
                    <button class = "tonton" ><?php $link = $data['nama_film']; echo "<a href = '../../episode/guest/$link .php'><img src = ../../img/Next.png width=20px ></img></a>";?></button>
                </div>
            </div>
        </div>
    </div><?php } ?>
</div>
</section>
<!-- Kamis -->

<div class = Judul2>Kamis</div>
<section class = "sec">
<div class = "container2">
    <?php
                                include "koneksi.php"; //panggil file koneksi
                                $query="SELECT * FROM  tbl_film where hari_diunggah = 'Kamis'"; //buat query sql
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
                    <button class = "tonton" ><?php $link = $data['nama_film']; echo "<a href = '../../episode/guest/$link .php'><img src = ../../img/Next.png width=20px ></img></a>";?></button>
                </div>
            </div>
        </div>
    </div><?php } ?>
</div>
</section>
<!-- Jum'at -->

<div class = Judul2>Jum'at</div>
<section class = "sec">
<div class = "container2">
    <?php
                                include "koneksi.php"; //panggil file koneksi
                                $query="SELECT * FROM  tbl_film where hari_diunggah = 'Jumat'"; //buat query sql
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
                    <button class = "tonton" ><?php $link = $data['nama_film']; echo "<a href = '../../episode/guest/$link .php'><img src = ../../img/Next.png width=20px ></img></a>";?></button>
                </div>
            </div>
        </div>
    </div><?php } ?>
</div>
</section>
<!-- Sabtu -->

<div class = Judul2>Sabtu</div>
<section class = "sec">
<div class = "container2">
    <?php
                                include "koneksi.php"; //panggil file koneksi
                                $query="SELECT * FROM  tbl_film where hari_diunggah = 'Sabtu'"; //buat query sql
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
                    <button class = "tonton" ><?php $link = $data['nama_film']; echo "<a href = '../../episode/guest/$link .php'><img src = ../../img/Next.png width=20px ></img></a>";?></button>
                </div>
            </div>
        </div>
    </div><?php } ?>
</div>
</section>
<!-- Minggu -->

<div class = Judul2>Minggu</div>
<section class = "sec">
<div class = "container2">
    <?php
                                include "koneksi.php"; //panggil file koneksi
                                $query="SELECT * FROM  tbl_film where hari_diunggah = 'Minggu'"; //buat query sql
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
                    <button class = "tonton" ><?php $link = $data['nama_film']; echo "<a href = '../../episode/guest/$link .php'><img src = ../../img/Next.png width=20px ></img></a>";?></button>
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
<div class = "foot">Dongdongnime</td><td width = "100%" align= "right">
<img class = "Icon1" src = "../../img/Wa.png" width = "30px"></img>
<img class = "Icon2" src = "../../img/Youtube.png" width = "30px"></img>
<img class = "Icon3" src = "../../img/Ig.png" width = "30px"></img>
</div>
</td>
</tr>
</table>
</body>
</html>