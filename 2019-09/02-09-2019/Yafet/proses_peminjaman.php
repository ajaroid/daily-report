<?php

include("koneksi.php");
$no_peminjaman = $_POST["no-peminjaman"];
$id = $_POST["id"];
$tgl_pinjam = $_POST["tgl-peminjaman"];
$tgl_kembali = $_POST["tgl-pengembalian"];
$pinjam = date('Y-m-d', strtotime($tgl_pinjam));
$kembali = date('Y-m-d', strtotime($tgl_kembali));
$isbn1 = $_POST["buku1"];
$isbn2 = $_POST["buku2"];
$isbn3 = $_POST["buku3"];
$status = "Belum Lunas";
$denda = 0;

function acak($panjang){
    $karakter= '123456789';
    $string = '';
    for ($i = 0; $i < $panjang; $i++) {
        $pos = rand(0, strlen($karakter)-1);
        $string .= $karakter{$pos};
    }
    return $string;
}
$hasil_1= acak(5);
$hasil_2= acak(5);
$hasil_3= acak(5);

if (trim($id)=="") {
		echo "ID masih kosong, isi dengan benar";
        }
	else {
$input="insert into peminjaman (id_peminjaman, tgl_peminjaman, tgl_pengembalian, id, status, denda)
        values ('$no_peminjaman','$pinjam','$kembali','$id', '$status', $denda )";
$hasil = pg_query($conn,$input);

$input2="insert into detail_peminjaman (id_peminjaman, isbn, id_detail_peminjaman)
        values ('$no_peminjaman','$isbn1', '$hasil_1')";
$hasil = pg_query($conn,$input2);

$input3="insert into detail_peminjaman (id_peminjaman, isbn, id_detail_peminjaman)
        values ('$no_peminjaman','$isbn2', '$hasil_2')";
$hasil = pg_query($conn,$input3);

$input4="insert into detail_peminjaman (id_peminjaman, isbn, id_detail_peminjaman)
        values ('$no_peminjaman','$isbn3', '$hasil_3')";
$hasil = pg_query($conn,$input4);

header('location:daftar_pinjam.php');
	}

?>