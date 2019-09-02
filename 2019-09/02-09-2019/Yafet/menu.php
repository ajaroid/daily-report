<?php
    session_start();
    if(!isset($_SESSION['username'])) {
    header('location:login.php'); 
    } else { 
    $username = $_SESSION['username']; 
    }
?>
<html>
	<head>
		<title>Menu</title>
		<link rel="stylesheet" type="text/css" href="Menu.css">
	</head>
	
	<body>
        <div id="header"> Selamat Datang Admin <?php echo $_SESSION['username'];?> </div>
        <div id="content">
		    <div id="logout">
                <a href="logout.php">Logout</a>
            </div>
		    <div id="peminjaman">
                <a href="daftar_pinjam.php">Peminjaman</a>
            </div>
		    <div id="anggota">
                <a href="anggota.php">Anggota</a>
            </div>
            <div id="buku">
                <a href="buku.php">Buku</a>
            </div>
        </div>
	</body>
</html>