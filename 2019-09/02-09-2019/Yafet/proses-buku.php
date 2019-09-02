<?php
include("koneksi.php");
$isbn = $_POST["isbn"];
$judul = $_POST["judul"];
$genre = $_POST["genre"];
$penulis = $_POST["penulis"];

if (trim($isbn)=="") {
		echo "ISBN masih kosong, isi dengan benar";
	}
	elseif (trim($judul)=="") {
		echo "Judul masih kosong, isi dengan benar";
	}
	elseif (trim($genre)=="") {
		echo "Genre masih kosong, isi dengan benar";
	}
	elseif (trim($penulis)=="") {
		echo "Penulis masih kosong, isi dengan benar";
	}
	else {
$input="insert into buku (isbn, judul, genre, penulis)
        values ('$isbn','$judul','$genre','$penulis')";
$hasil = pg_query($conn,$input);
header("location:buku.php");
	}
?>