<html>
    <link rel="stylesheet" type="text/css" href="css/register.css"></center>
</head>
<body>
<div class = "reg">
    <img src = "img/logod.png" class = "image"></img>
<form method="post" action="submit_register.php">
<center><h2>Daftar</h2></center>
<div class = teks>
<img src = "img/mail.png" class = "icon"></img>
<input class = "input" type= "email" name="email" placeholder = "Email"><br>
</div>
<div class = teks>
<img src = "img/profile.png" class = "icon2"></img>
<input class = "input"  type="text" name="username" placeholder = "Username"><br><br>
</div>
<div class = teks>
    <img src = "img/pass.png" class = "icon3"></img>
<input class = "input1"  type="text" name= "pass1" placeholder = "Password"></input><br>
</div>
<center><input class ="submit" kirim type="submit" name="submit" value="Kirim">
<a href = "login.php" target = "blank">Login</a>
<a href = "guest/homepage/Homepage.php" target = "blank">Masuk sebagai guest</a>
</center>
</form>
</body>
</html>