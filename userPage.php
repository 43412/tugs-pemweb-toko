
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <html lang="en">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="header.css">
    <script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="menu1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="navbar-fixed-top.css" rel="stylesheet">
      <link rel="stylesheet" href="list.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>

<body >

  <!-- Large modal -->






<!--oncontextmenu="javascript:alert('Eitss... Gak boleh Klik Kanan');return false;-->
  <div>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="coba.php">X-Shop</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li ><a id="awal" >Home</a></li>
          <li ><a id="genre" >Kategori</a></li>
          <li><a id="komen">Saran dan Kritik</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a id="awal">Buat Toko</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header">Kosong ver2</li>
              <li><a href="#">Kosong</a></li>
            </ul>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <div id="logout" >

            <form action="logout.php" class="navbar-form navbar-right">
              Selamat datang, Tamu
              <button type="log-out" class="btn button-sign-out" >Log Out</button>
              </form>

          </div>
          <div>
                    <form action="search.php" method="GET">
                      <input type="text" name="query" />
                <input type="submit" value="Search" />
              </form> </div>

        </ul>

      </div>
    </div>
  </nav>
</div>

  <div class="header" style="background-image:url(img/Supermarket.jpg);">
    <div align = "center" style ="padding-top: 200px;">
      <h1> Selamat Datang</h1>
      <p class="text-center">mari berbelanja di X-Shop</p>
    </div>
  </div>

  <div class="content" style="background-color : white">
    <div class="small-12 columns">
      <table>
        <th margin-left:" 200px"></th>


<div>
    <div class="carousel slide" data-ride="carousel" id="carousel-1">
        <div class="carousel-inner" role="listbox">
            <div class="item active"><ul id="float" style="text-align: right; list-style-position: inside;"><li><img src="img/mobil.jpg" alt="Slide Image" width = "400px" height = "400px"></li><li><font size="50px">Mobil</font><br><p style ="font-size:30px">Rp. 112.000.000</p><br><p style ="font-size:30px">Mobil luas. Cocok untuk ajak keluarga</p></li></div>
            <div class="item"><ul id="float" style="text-align: right; list-style-position: inside;"><li><img src="img/motor.jpg" alt="Slide Image" width = "400px" height = "400px"></li><li><font size="50px">Motor</font><br><p style ="font-size:30px">Rp. 12.000.000</p><br><p style ="font-size:30px">Motor mulus harga rakus...</p></li></div>
            <div class="item"><ul id="float" style="text-align: right; list-style-position: inside;"><li><img src="img/pintu.jpg" alt="Slide Image" width = "400px" height = "400px"></li><li><font size="50px">Pintu Jati</font><br><p style ="font-size:30px">Rp. 7.000.000</p><br><p style ="font-size:30px">Pintu dari kayu jati. Awat, kuat, tahan lama, desainnya stylish</p></li></div>
            <div class="item"><ul id="float" style="text-align: right; list-style-position: inside;"><li><img src="img/sprei.jpg" alt="Slide Image" width = "400px" height = "400px"></li><li><font size="50px">Sprei</font><br><p style ="font-size:30px">Rp. 300.000</p><br><p style ="font-size:30px">Sprei luar biasa. Dingin, hangat, dan nyaman</p></li></div>
            <div class="item"><ul id="float" style="text-align: right; list-style-position: inside;"><li><img src="img/roti.jpg" alt="Slide Image" width = "400px" height = "400px"></li><li><font size="50px">Roti</font><br><p style ="font-size:30px">Rp. 10.000</p><br><p style ="font-size:30px">Roti biasa yang tak lekang oleh zaman</p></li></div>
            <div class="item"><ul id="float" style="text-align: right; list-style-position: inside;"><li><img src="img/sofa.jpg" alt="Slide Image" width = "400px" height = "400px"></li><li><font size="50px">Sofa</font><br><p style ="font-size:30px">Rp. 9.000.000</p><br><p style ="font-size:30px">Sofa ekstra besar. Cocok untuk bersantai</p></li></div>

        </div>
        <div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a>
            <a class="right carousel-control" href="#carousel-1" role="button" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="3"></li>
            <li data-target="#carousel-1" data-slide-to="4"></li>
            <li data-target="#carousel-1" data-slide-to="5"></li>
        </ol>
    </div>

</div>

    </div>
  </div>
  <div style="background:-webkit-linear-gradient(blue, yellow , green); border: 1px solid powderblue;
    padding: 30px;">
    <div id="pos">

      X-Shop | Jual Beli Online Aman dan Nyaman
      X-Shop merupakan pasar / mal online terbesar di Indonesia yang memungkinkan individu maupun pemilik usaha di Indonesia untuk membuka dan mengelola toko online mereka secara mudah dan gratis, sekaligus memberikan pengalaman berbelanja online yang lebih aman dan nyaman. Jual beli online menjadi lebih menyenangkan. Punya online shop? Buka cabang nya di X-Shop sekarang! Gratis!

    </div>


  </div>
  <footer>
    <div style="border: 1px solid; padding: 15px; margin-left: 400px; margin-right: 400px; margin-top: 20px; margin-bottom: 20px;">

  <?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = $kalimat = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {

$kalimat = "Komen sukses";
$name = "<script>$(document).ready(function(){
    $('#saran_komen').hide();
});</script>";
}

?>

<div id="saran_komen">

<h2>Kritik dan saran</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="name">
<br><br>
E-mail: <input type="text" name="email">
<br><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea>
<br><br>
<br><br>
<input type="submit" name="submit" value="Submit" id="submit_komen">
</form>
</div>
<?php

echo $kalimat;
echo $name;
?>


    </div>
    <address style="background-color: black; height:50px ;text-align:center;" >
    <p>  Penulis: Makubex</p>
      Website: http://makubex.xyz
    </address>


  </footer>
</body>

</html>
