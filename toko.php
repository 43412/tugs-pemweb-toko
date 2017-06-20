<?php
class toko {
    function __construct() {
      include("koneksi.php");
      $namatoko = $_POST['namatoko'];
      $result   = mysqli_query($Koneksi, "select * from toko");
      $row = mysql_fetch_object( $result );
      $total = $row->num_rows+1;
      $pemilik = $_SESSION["user"];

      $sql = "INSERT INTO toko (kode, namatoko, pemilik)
      VALUES ('$total', '$namatoko', '$pemilik')";
      if ($Koneksi->query($sql) === TRUE) {
        echo "<script type='text/javascript'>alert('Anda berhasil menambahkan toko');</script>";
      } else {
        echo "<script type='text/javascript'>alert('Gagal menambahkan');</script>";
      }

      $Koneksi->close();
        header("location:userPage.php");
    }

    function tambahitem (){
      include("koneksi.php");
      $namabarang = $_POST['namabarang'];
      $stok = $_POST['stok'];
      $kategori = $_POST['kategori'];
      $result   = mysqli_query($Koneksi, "select * from barang");
      $row = mysql_fetch_object( $result );
      $total = $row->num_rows+1;
      $penjual = $_SESSION["user"];
      $toko = $_COOKIE["toko"];
      $sql = "INSERT INTO barang (id, nama, kategori, stok, penjual, toko, harga)
      VALUES ('$total', '$namabarang', '$kategori', '$stok', '$penjual', '$toko', '$harga')";
      if ($Koneksi->query($sql) === TRUE) {
        echo "<script type='text/javascript'>alert('Anda berhasil menambahkan barang');</script>";
      } else {
        echo "<script type='text/javascript'>alert('Gagal menambahkan');</script>";
      }

      $Koneksi->close();
        header("location:userPage.php");
    }
    }
    function hapusitem (){

    }
    function edittoko (){
      include("koneksi.php");
      $namatoko = $_POST['namatoko'];
      $pemilik = $_SESSION["user"];

      $edittoko = "UPDATE toko SET namatoko='$namatoko' WHERE pemilik=$pemilik";}
      if ($Koneksi->query($edittoko) === TRUE) {
     echo "Berhasil mengedit";
       } else {
     echo "Gagal gagal mengedit ";
       }
    }
}
 ?>
