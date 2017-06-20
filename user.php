<?php

class userClass {

  function __construct() {
    include("koneksi.php");
    $username = $_POST['user'];
    $password = ($_POST['password']);

    $login    = mysqli_query($Koneksi, "select * from user where user='$username' and password='$password'");
    $result   = mysqli_num_rows($login);
    if($result>0){

        $user = mysqli_fetch_array($login, MYSQLI_ASSOC);
        session_start();
        $_SESSION['user'] = $username;
        header("");

        $firstname = $user["first_name"];
        $lastname = $user["last_name"];

        header("location:index.html");
    }else{
        header("");
            header("location:login.html");
            echo "<script type='text/javascript'>alert('gagal');</script>";

    }

       echo ("<script type='text/javascript'>alert('$firstname');</script>");
   }

   function buattoko (){
     include ("toko.php");
     $tokobaru = new toko ();

   }

   function isisaldo (){
     include("koneksi.php");
     $isisaldo = $_POST['isisaldo'];
     $user = $_SESSION["user"];
     if ($isisaldo>0){
     $tambahsaldo = "UPDATE user SET saldo='$isisaldo' WHERE user=$user";}
     if ($Koneksi->query($tambahsaldo) === TRUE) {
    echo "Berhasil menambahkan";
      } else {
    echo "Gagal menambahkan: ";
      }

   }

   function belibarang (){
     include("koneksi.php");
     $isisaldo = $_POST['isisaldo'];
   }

    function register () {
      include("koneksi.php");
      $username = $_POST['username'];
      $firstname = ($_POST['firstname']);
      $lastname = $_POST['lastname'];
      $password = ($_POST['passwordreg']);
      $saldo = 0;

      $sql = "INSERT INTO user (user, first_name, last_name, password, saldo)
      VALUES ('$username', '$firstname', '$lastname', '$password', '$saldo')";
      if ($Koneksi->query($sql) === TRUE) {
        echo "<script type='text/javascript'>alert('Anda berhasil registrasi');</script>";
      } else {
        echo "<script type='text/javascript'>alert('Gagal register');</script>";
      }

      $Koneksi->close();
        header("location:register.html");
    }
    function hapustoko(){
      include("koneksi.php");
      $isisaldo = $_POST['isisaldo'];
    }
    function editprofile (){
      include("koneksi.php");
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $password = $_POST['password'];
      $user = $_SESSION["user"];

      $editprofile = "UPDATE user SET first_name='$firstname', last_name = $lastname , password = $password WHERE user=$user";}



 }
?>
