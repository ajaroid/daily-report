<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="tabel.css">
	</head>
	
	<body>
		<div id="header"><p>Daftar Pinjam</p></div>
		<p class="btn-tambah"><a href="peminjaman.php">Pinjam</a></p>
		<div id="content">
			<table border="1" align="center">
				<tr>
					<td>No.</td>
					<td>No.Peminjaman</td>
					<td>Tgl-Peminjaman</td>
					<td>Tgl-Pengembalian</td>
					<td>ID Anggota</td>
					<td>Denda</td>
					<td>Status</td>
					<td>Cek Status</td>
					<td>Detail</td>
				</tr>
				<?php
			        //koneksi ke database
					include("koneksi.php");
					$no = 0;
			        //mengambil data dari tabel barang
			        $tampil = pg_query("select * from peminjaman");
			        while ($data = pg_fetch_array($tampil)){
						$no++;
		        ?>

		        <tr align = "center">
					<td>
						<?php echo $no;?>
					</td>
			        <td>
                        <?php echo $data['id_peminjaman']; ?> 
                    </td>
			        <td>
                        <?php echo $data['tgl_peminjaman']; ?>
                    </td>
			        <td>
                        <?php echo $data['tgl_pengembalian']; ?>
                    </td>
                    <td>
                        <?php echo $data['id'];?>
                    </td>
					<td>
						<?php echo $data['denda']?>
					</td>
					<td>
						<?php echo $data['status']?>
					</td>
					<td>
					<a href = "cek_status.php?id=<?php echo $data['id_peminjaman']?>">Cek Status</a>
					</td>
					<td>
					<a href = "detail_peminjaman.php?id=<?php echo $data['id_peminjaman']?>&no=<?php echo $data['id']?>">Detail</a>
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