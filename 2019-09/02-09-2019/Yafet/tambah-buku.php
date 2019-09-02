<html>
<head>
	<title>Input Data Barang</title>
	<link rel="stylesheet" href="Css.css" type="text/css">
</head>
<body>
	<h3><div class = "Jdl">Tambah Buku</div></h3>
	<br>
	<br>
	<form action = "proses-buku.php" method = "post" p align = "center">
	<table width= 50% height= 5%  align = "center">
	<tr>
	<td><b>Input Data Barang</b></td>
	</tr>
	</table>
	<br>
	<table width= 50% height= 5%  align = "center">
	<tr>
	<td>ISBN: </td>
	<td><input class = "br" value="<?php function acak($panjang){$karakter= '123456789';$string = '';for ($i = 0; $i < $panjang; $i++) {$pos = rand(0, strlen($karakter)-1);$string .= $karakter{$pos};}return $string;}$hasil_1= acak(5);$hasil_2= acak(10);echo $hasil_1;?>" readonly name="isbn" type="text"></td>
	</tr>
	<tr>
	<td>Judul: </td>
	<td><input type="text" name="judul" class = "br"></td>
	</tr>
	<tr>
	<td>Genre: </td>
	<td><input type="text" name="genre" class = "br"></td>
	</tr>
	<tr>
	<td>Penulis: </td>
	<td><input type="text" name="penulis" class = "br"></td>
	</tr>
	<table>
	</form>
	<p align= "center"><input class = "btn" type=submit value= "Tambah"></p>
	<div id="operasi">
		<a href="buku.php">kembali ke Buku</a>
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