<html>
    <head>
        <title>Logout Page</title>
    </head>

    <style>
        #content{
            widht:100%;
            height:200px;
            text-align:center;
        }
    </style>
    
    <body>
        <div id="content">
            <h2>Logout Page</h2>
            <p>Anda Yakin Ingin Logout</p>
            <a href="proses-logout.php">Ya</a> | <a href="menu.php">Tidak</a>
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