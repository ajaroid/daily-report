<?php
$host ="localhost";
$username ="postgres";
$password ="dapp";
$database ="perpus";

$conn_string = "host=$host port=5432 dbname=$database user=$username password=$password";
$koneksi = pg_connect($conn_string);

if($koneksi){
	echo ("koneksi sukses");
}
else{
	echo ("koneksi gagal");
}
?>





