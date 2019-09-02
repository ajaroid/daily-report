<html>
<head>
	<title>Input Data Barang</title>
	<link rel="stylesheet" href="Css.css" type="text/css">
</head>
<body>
	<h3><div class = "Jdl">Tambah Anggota</div></h3>
	<br>
	<br>
	<form action = "proses-anggota.php" method = "post" p align = "center">
	<table width= 50% height= 5%  align = "center">
	<tr>
	<td><b>Input Data Barang</b></td>
	</tr>
	</table>
	<br>
	<table width= 50% height= 5%  align = "center">
	<tr>
	<td>ID: </td>
	<td><input class = "br" value="<?php function acak($panjang){$karakter= '123456789';$string = '';for ($i = 0; $i < $panjang; $i++) {$pos = rand(0, strlen($karakter)-1);$string .= $karakter{$pos};}return $string;}$hasil_1= acak(5);$hasil_2= acak(5);echo $hasil_2;?>" readonly name="id" type="text"></td>
	</tr>
	<tr>
	<td>Nama: </td>
	<td><input type="text" name="nama" class = "br"></td>
	</tr>
	<tr>
	<td>Alamat: </td>
	<td><input type="text" name="alamat" class = "br"></td>
	</tr>
	<tr>
	<td>Telepon: </td>
	<td><input type="text" name="telepon" maxlength="6" class = "br"></td>
	</tr>
	<table>
	</form>
	<p align= "center"><input class = "btn" type=submit value= "Tambah"></p>
	<div id="operasi">
		<a href="anggota.php">kembali ke Anggota</a>
	</div>
	<?php
            session_start();
            if(!isset($_SESSION['username'])) {
            header('location:login.php'); 
            } else { 
            $username = $_SESSION['username']; 
            }
		?>
</body>
</html>