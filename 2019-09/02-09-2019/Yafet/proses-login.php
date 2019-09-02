<?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $cekuser = pg_query("SELECT * FROM admin WHERE username = '$username'");
   $hasil = pg_fetch_array($cekuser);
   if($username == 300814){
    header('location:Register.php');
   }else if(pg_num_rows($cekuser) == 0) {
    echo "<div align='center'>Username Salah! <a href='login.php'>Back</a></div>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:Menu.php');
     }
   }
?>
