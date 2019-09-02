<html>
    <head>
        <title></title>
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
            .user{
                margin: 0;
            }
            .isi{
                width: 395px;
                margin-left: auto;
                margin-right: auto;
                margin-top: 20px;
            }
            .isi div{
                margin-top: 10px;
                margin-bottom: 10px;
                padding: 0;
                width: 400px;
                height: 40px
            }
            .isi p, input{
                float: left;
                margin-top: 10px;
            }
            .isi p{
                font-family: arial;
                margin-right: 20px;
                width: 200px;
            }
            .judul{
                text-align: center;
            }
            .btn_footer{
                padding: 0;
                margin: 0;
            }
            .btn_footer ul{
                width: 247px;
                margin: auto;
                padding: 0;
            }
            .btn_footer li{
                float:left;
                margin: 5;
                padding: 4;
                list-style-type: none;
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
            <h2 class="judul">PENGEMBALIAN BUKU</h2>
            <div>
                <p>Nama Siswa</p>
                <input/>
            </div>
            <div>
                <P>Kelas dan Jurusan</P>
                <input/>
            </div>
            <div>
                <p>NIS</p>
                <input/>
            </div>
            <div>
                <p>Judul Buku</p>
                <input/>
            </div>
            <div>
                <p>Kode Buku / ISBN</p>
                <input/>
            </div>
            <div>
                <p>Jatuh Tempo</p>
                <input/>
            </div>
            <div>
                <p>Tanggal Pengembalian</p>
                <input/>
            </div>
            <div>
                <p>Denda</p>
                <input/>
            </div>
        </div>
        <div class="btn_footer">
            <ul>
                <a href="#"><li>TAMBAH</li></a>
                <a href="#"><li>SIMPAN</li></a>
                <a href="#"><li>KELUAR</li></a>
            </ul>
        </div>
    </body>
</html>