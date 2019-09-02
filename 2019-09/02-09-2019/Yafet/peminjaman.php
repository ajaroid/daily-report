<?php
error_reporting(0);
?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="peminjaman.css">
	</head>
	
	<body>
		<div id="header">
			<p>PEMINJAMAN</p>
		</div>
	<form action ="proses_peminjaman.php" method="post">
			<div id="input-id">
				Masukkan ID anggotamu: <input type="text" name="id">
			</div>
		<div id="content">
            <p class="title-form">FORM PEMINJAMAN</p>
            <br>
			No.Peminjaman : 
			<input type="text" value="<?php function acak($panjang){$karakter= '123456789';$string = '';for ($i = 0; $i < $panjang; $i++) {$pos = rand(0, strlen($karakter)-1);$string .= $karakter{$pos};}return $string;}$hasil_1= acak(5);$hasil_2= acak(5);echo $hasil_2;?>" readonly name="no-peminjaman"><br><br>
			Tgl.Peminjaman : 
			<input type="text" readonly value="<?php echo date('Y-m-d');?>" name="tgl-peminjaman"><br><br>
			Tgl.Pengembalian : 
			<input type="text"  readonly value="<?php $tgl1 = date('Y-m-d'); $tgl2 = date('Y-m-d', strtotime('+6 days', strtotime($tgl1))); echo $tgl2; ?>" name="tgl-pengembalian"><br><br>
			<br>
		</div>
		
		<div class="buku">
			<table border="1" width="800px" height="400px">
				<tr height="100px">
						<td>Isbn</td>
				</tr>
				<tr>
					<td><input type="text" name="buku1"></td>
				</tr>
				<tr>
					<td><input type="text" name="buku2"></td>
				</tr>
				<tr>
					<td><input type="text" name="buku3"></td>
				</tr>
				
			</table>
		</div>
		<input type="submit"value="Pinjam">
		</form>
		<div id="operasi">
			<a href="menu.php">kembali ke menu</a>
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