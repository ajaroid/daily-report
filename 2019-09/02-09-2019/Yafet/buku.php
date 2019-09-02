<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="tabel.css">
	</head>
	
	<body>
		<div id="header"><p>Daftar Buku</p></div>
		<p class="btn-tambah"><a href="tambah-buku.php">Tambah Buku</a></p>
		<div id="content">
			<table border="1" align="center">
				<tr>
					<td>No.Buku</td>
					<td>Judul</td>
					<td>Genre</td>
					<td>Penulis</td>
				</tr>
				<?php
			        //koneksi ke database
			        include("koneksi.php");
			        //mengambil data dari tabel barang
			        $tampil = pg_query("select * from buku");
			        while ($data = pg_fetch_array($tampil)){
		        ?>

		        <tr align = "center">
			        <td>
                        <?php echo $data['isbn']; ?> 
                    </td>
			        <td>
                        <?php echo $data['judul']; ?>
                    </td>
			        <td>
                        <?php echo $data['genre']; ?>
                    </td>
                    <td>
                        <?php echo $data['penulis']?>
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