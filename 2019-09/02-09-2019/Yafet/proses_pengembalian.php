<?php
error_reporting(0);
include("koneksi.php");
$id_pinjam = $_POST["id_pinjam"];
$tgl_kembali_buku = $_POST["tgl_kembali_buku"];
$tgl_pinjam = $_POST["tgl_pinjam"];
$tgl_kembali = $_POST["tgl_kembali"];
$buku_kembali = date('Y-m-d', strtotime($tgl_kembali_buku));
$pinjam = date('Y-m-d', strtotime($tgl_pinjam));
$kembali = date('Y-m-d', strtotime($tgl_kembali));
$id = $_POST["id"];
$buku = $_POST["buku"];
$denda = "2000";
$hitung_buku = count($buku);
function acak($panjang){
    $karakter= '123456789';
    $string = '';
    for ($i = 0; $i < $panjang; $i++) {
        $pos = rand(0, strlen($karakter)-1);
        $string .= $karakter{$pos};
    }
    return $string;
}

$acak1= acak(5);
$acak2= acak(5);
$acak3= acak(5);
$acak4= acak(5);
$id_detail_peminjaman = array($acak2,$acak3,$acak4);

function IntervalDays($CheckIn,$CheckOut){
    $CheckInX = explode("-", $CheckIn);
    $CheckOutX =  explode("-", $CheckOut);
    $date1 =  mktime(0, 0, 0, $CheckInX[1],$CheckInX[2],$CheckInX[0]);
    $date2 =  mktime(0, 0, 0, $CheckOutX[1],$CheckOutX[2],$CheckOutX[0]);
    $interval =($date2 - $date1)/(3600*24);
    // returns numberofdays
    return  $interval ;
    }
$selisih_hari = IntervalDays($kembali,$buku_kembali);
$total_denda = $selisih_hari * $denda;

if($buku == ""){
    echo "Pilih Buku Yang Di Pilih";
}
else{
    $input = "insert into pengembalian (id_pengembalian, id, id_peminjaman)
              values ('$acak1','$id','$id_pinjam')";
    $hasil = pg_query($conn, $input);

    $input3 = "UPDATE peminjaman SET denda = $total_denda WHERE id_peminjaman = $id_pinjam";
    $hasil3 = pg_query($conn, $input3);
}
for($y=0;$y<$hitung_buku;$y++){
    $input1 = "insert into detail_pengembalian
              values('$id_detail_peminjaman[$y]','$acak1','$buku[$y]','$buku_kembali','$pinjam','$kembali','$id_pinjam')";
    $hasil2 = pg_query($conn, $input1);
    header("location:cek_status.php?id=$id_pinjam");
}

?>