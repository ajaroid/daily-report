<html>
    <head>
        <title>daftarbuku</title>
        <style>
            body{
            padding: 0;
            margin: 0;
            }
            .header{
                padding: 0;
                margin: 0;
            }
            h1{
                padding: 0;
                margin: 0;
                text-align:center;
                color:chartreuse;
            }
            h3{
                padding: 0;
                margin: 0;
                text-align:center;
                color:gold;
            }
            .waktu{
                padding: 0;
                margin-top: 20px;
                margin-left: auto;
                margin-right: auto;
                width: 470px;
                height: 60px;
            }
            .waktu p, h5{
                float: left;
                padding: 0;
                margin-top: 0px;
                margin-bottom: 0px;
                margin-left: 15px;
                margin-right: 20px;
                font-size: 16px;
            }
            .waktu div{
                margin: 0;
                height: 30px;
                padding: 0;
            }
            .waktu h5{
                margin-left: -15px;
                margin-right: 0px;
            }
            .button, #button {
                height: 33px;
                margin: 0;
                padding: 0;
                background: aqua;
            }
            #button{
                margin-left: auto;
                margin-right: auto;
                list-style: none;
                width: 605px;
            }
            #button li{
                padding: 5px;
                margin:0;
                float: left;
                background: aqua;
                border: 2px solid aqua;
            }
            #button li:hover {
                background: aquamarine;
                border-bottom-style: solid;
                border-bottom-color: black;
                z-index: -1;
            }
            .judul{
                text-align: center;
            }
            .search{
                margin-left: auto;
                margin-right: auto;
                padding: 0;
                width: 750px;
                height: 25px;
            }
            #search, .button-tambah{
                width:300px;
                margin:0;
                padding:0;
                float:left;
            }
            .button-tambah{
                width: 160px;
                float:right;
            }
            .user{
                margin: 0;
            }
            .content{
                margin-left: auto;
                margin-right: auto;
                padding: 0;
                width: 800px;
                border-collapse: collapse;
                text-align: center;
            }
            .content td{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <h1>PERPUSTAKAAN</h1>
            <h3>SMK N 6 SKA</h3>
        </div>
        <div class="waktu">
            <div>
                <p>
                    Hari : 
                    <?php 
                        echo date('l');
                    ?>
                </p>
                <p>
                    Tanggal :
                    <?php 
                        echo date('d - m - Y');
                    ?>
                </p>
                <p>
                    Pukul : <h5 id="jam"></h5>
                </p>
            </div>
            <p class="user">User :</p>
            <script>
                window.setTimeout("waktu()", 1000);
                function waktu() {
                    var waktu = new Date();
                    setTimeout("waktu()", 1000);
                    document.getElementById("jam").innerHTML = waktu.getHours() +":"+ waktu.getMinutes() +":"+ waktu.getSeconds();
                }
            </script>
        </div>
        <div class="button">
            <ul id="button">
                <a href="home.php"><li>HOME</li></a>
                <a href="daftaranggota.php"><li>DAFTAR ANGGOTA</li></a>
                <a href="daftarbuku.php"><li>DAFTAR BUKU</li></a>
                <a href="index.php"><li>PEMINJAMAN</li></a>
                <a href="pengembalian.php"><li>PENGEMBALIAN</li></a>
            </ul>
        </div>
        <div class="isi">
                <h2 class="judul">DAFTAR BUKU</h2>
            <div class="search">
                    <div  id="search">
                        <input type="text" placeholder="cari......." />
                        <input type="submit" value="Cari"/>
                    </div>
                    <div class="button-tambah">
                        <a><button>Keluar</button></a>
                        <a href="inputbuku.php"><button>Tambah Data</button></a>
                    </div>
            </div>
            <table class="content">
                <th >
                    <td>No</td>
                    <td>Judul</td>
                    <td>Kode</td>
                </th>
            </table>
        </div>
    </body>
</html>