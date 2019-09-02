<?php
include("koneksi.php");
$username = $_POST["username"];
$password = $_POST["password"];

if (trim($username)=="") {
		echo "username masih kosong, isi dengan benar";
	}
	else if (trim($password)=="") {
		echo "password masih kosong, isi dengan benar";
	}
	else {
$input= "insert into admin (username, password)
        values ('$username','$password')";
$hasil = pg_query($conn,$input);
echo "Berhasil Membuat Akun Admin <br>";
    }
echo "<a href='login.php'>Kembali Login</a>";
?>