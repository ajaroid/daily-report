<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="tabel.css">
	</head>
	
	<body>
		<div id="header"><p>Daftar Anggota</p></div>
		<p class="btn-tambah"><a href="tambah-anggota.php">Tambah Anggota</a></p>
		<div id="content">
			<table border="1" align="center">
				<tr>
					<td>No.Anggota</td>
					<td>Nama</td>
					<td>Alamat</td>
					<td>No.Telp</td>
				</tr>
				<?php
			        //koneksi ke database
			        include("koneksi.php");
			        //mengambil data dari tabel barang
			        $tampil = pg_query("select * from anggota");
			        while ($data = pg_fetch_array($tampil)){
		        ?>

		        <tr align = "center">
			        <td>
                        <?php echo $data['id']; ?> 
                    </td>
			        <td>
                        <?php echo $data['nama']; ?>
                    </td>
			        <td>
                        <?php echo $data['alamat']; ?>
                    </td>
                    <td>
                        <?php echo $data['telepon']?>
                    </td>
			        
		        </tr>
                
                <?php
			        }
		        ?>
			<table>
			<div id="operasi">
				<a href="menu.php">kembali ke menu</a>
			</div>
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