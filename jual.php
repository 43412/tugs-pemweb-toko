
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

            <form class="navbar-form navbar-right">
              Selamat datang, Tamu
              <button type="log-out" class="btn button-sign-out" href = "logout.php">Log Out</button>
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

  <div style="background:white; border: 1px solid powderblue;
    padding: 30px;">
    <div id="pos">
      <?php include('jual-config.php'); ?>
      <html>
      <head>
            <title>Jual barang</title>
          </head>

          <body>
            
            <form action="" method="POST">
              <input type="text" name="nama" placeholder="Nama Barang" />
              <input type="text" name="stok" placeholder="Stok" />
              <input type="submit" name="jual" placeholder="Jual" />
  </form>
  </body>
  </html>


    </div>


  </div>
  <footer>

    <address style="background-color: black; height:50px ;text-align:center;" >
    <p>  Penulis: Makubex</p>
      Website: http://makubex.xyz
    </address>


  </footer>
</body>

</html>
