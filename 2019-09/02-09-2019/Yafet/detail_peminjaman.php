<html>
    <head>
        <title>Detail Peminjaman</title>
    </head>
        <style>
            body{
                margin:0;
                padding:0;
            }
            #header{
                height:50px;
                text-align:center;
            }
            #content{
                border: 1px solid black;
                height:auto;
                width:900px;
                margin:auto;
            }
            .anggota{
                border: 1px solid black;
                margin:35px;
                height:auto;
                padding-top:20px;
                padding-bottom:50px;
                padding-left:20px;
                padding-right:20px;
            }
            .buku{
                border: 1px solid black;
                margin:35px;
                height:auto;
                padding-top:30px;
                padding-bottom:30px;
                padding-left:7px;
                padding-right:7px;
            }
            a{
                color:black;
                text-decoration:none;

            }
            .btn-kembali{
                margin-top: -5px;
                margin-bottom:5px;
                margin-left:35px;
            }
        </style>
    <body>
        <div id="header">
            <p>DETAIL PEMINJAMAN</p>
        </div>
        <div id="content">
            <form action="proses_pengembalian.php" method="post">
            <div class="anggota">
                    <?php
                        include('koneksi.php');
                        $id_pinjam= $_GET['id'];
                        $id_anggota= $_GET['no'];
                        $pinjam = pg_query("select * from peminjaman where id_peminjaman = $id_pinjam");
                        while ($data = pg_fetch_array($pinjam)){
                    ?>
                        
                        No:Peminjaman : <input type="text"  readonly value="<?php echo $data['id_peminjaman']?>" name="id_pinjam">
                        Tgl_Mengembalikan Buku : <input type="text"  readonly value="<?php echo date('Y-m-d');?>" name="tgl_kembali_buku">
                        <br>
                        <br>
                        Tgl_peminjaman : <input type="text"  readonly value="<?php echo $data['tgl_peminjaman']?>" name="tgl_pinjam">
                        Tgl_pengembalian : <input type="text"  readonly value="<?php echo $data['tgl_pengembalian']?>" name="tgl_kembali">
                        <br>
                        <br>
                    <?php
                        }
                        $anggota = pg_query("select * from anggota where id = $id_anggota");
                        while ($hasil = pg_fetch_array($anggota)){
                    ?>
                        ID : <input type="text" readonly name="id" value="<?php echo $hasil['id']?>">
                        Nama : <input type="text" readonly name="nama" value="<?php echo $hasil['nama']?>">
                        Alamat : <input type="text" readonly name="alamat" value="<?php echo $hasil['alamat']?>">
                        Telp : <input type="text" readonly name="telp" value="<?php echo $hasil['telepon']?>">
                    <?php
                        }
                    ?>
            </div>
            <div class="buku">
                    <?php
                        $no = 0;
                        $isbn = pg_query("SELECT buku.*
                        FROM buku, peminjaman, detail_peminjaman
                        WHERE buku.isbn = detail_peminjaman.isbn 
                              AND detail_peminjaman.id_peminjaman = peminjaman.id_peminjaman
                              AND peminjaman.id_peminjaman = '$id_pinjam'");
                        while($result = pg_fetch_array($isbn)){
                            $no++;
                            $buku = $result['isbn'];
                            $cek_buku = pg_query("select isbn 
                            from detail_pengembalian
                            where isbn = '$buku'");
                            $cek_buku2 = pg_fetch_array($cek_buku);
                    ?>
                <p align="center">
                    <b>
                        <u>
                            <input type="checkbox" 
                                   <?php echo ($cek_buku2[0] == $result['isbn']) ? 'checked' : '';?> 
                            name=" <?php echo ($cek_buku2[0] == $result['isbn']) ? 'buku1' : 'buku[]';?>" 
                                   <?php echo ($cek_buku2[0] == $result['isbn']) ? 'disabled' : '';?> 
                            value="<?php echo $result['isbn']?>">BUKU <?php echo $no?>
                        </u>
                    </b>
                </p>
                ISBN : <input type="text" readonly value="<?php echo $result['isbn']?>">
                Judul : <input type="text" readonly value="<?php echo $result['judul']?>">
                Penulis : <input type="text" readonly value="<?php echo $result['penulis']?>">
                Genre : <input type="text" readonly value="<?php echo $result['genre']?>">
                    <br>
                    <?php
                        }
                    ?>
            </div>
            <?php
                $cek_lunas = pg_query("select status from peminjaman where id_peminjaman = '$id_pinjam'");
                $cek_lunas2 = pg_fetch_array($cek_lunas);
            ?>
            <input class="btn-kembali" type="<?php echo ($cek_lunas2[0] == 'Lunas') ? 'hidden' : 'submit';?>" value="Mengembalikan" >
            </form>
        </div>
        <div id="operasi">
            <a href="daftar_pinjam.php">Kembali Ke Daftar Pinjam</a>
        </div>
    </body>
</html>