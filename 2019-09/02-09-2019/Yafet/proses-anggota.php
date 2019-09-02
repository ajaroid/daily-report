<?php

include("koneksi.php");
$id = $_POST["id"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$telepon = $_POST["telepon"];

if (trim($id)=="") {
		echo "ID masih kosong, isi dengan benar";
	}
	elseif (trim($nama)=="") {
		echo "Nama masih kosong, isi dengan benar";
	}
	elseif (trim($alamat)=="") {
		echo "Alamat masih kosong, isi dengan benar";
	}
	elseif (trim($telepon)=="") {
		echo "Telepon masih kosong, isi dengan benar";
	}
	else {
$input="insert into anggota (id, nama, alamat, telepon)
        values ('$id','$nama','$alamat','$telepon')";
$hasil = pg_query($conn,$input);
	}
header("location:anggota.php");
?>