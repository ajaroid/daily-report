<?php
include('koneksi.php');
$id_pinjam= $_GET['id'];
$hitung = array();
$hitung2 = array();

$isbn = pg_query("select isbn
from  detail_peminjaman
WHERE id_peminjaman = '$id_pinjam'");
while($result = pg_fetch_array($isbn)){
    $hitung[]=$result;
}
$data = count($hitung);

$isbn2 = pg_query("select isbn
from detail_pengembalian
where id_peminjaman = '$id_pinjam'");
while($result2 = pg_fetch_array($isbn2)){
    $hitung2[]=$result2;
}
    $data2 = count($hitung2);

if($data == $data2){
    $input = "UPDATE peminjaman SET status = 'Lunas' WHERE id_peminjaman = $id_pinjam";
    $hasil = pg_query($conn, $input);
    header('location:daftar_pinjam.php');
}else{
    $input = "UPDATE peminjaman SET status = 'Belum Lunas' WHERE id_peminjaman = $id_pinjam";
    $hasil = pg_query($conn, $input);
    header('location:daftar_pinjam.php');
}
?>