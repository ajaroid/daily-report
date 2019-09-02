<?php
    $db = "test";
    $conn = mysql_connect("localhost","root","", $db);
    $buka = mysql_select_db($db,$conn);

    $pinjam = $_POST["pinjam"];
    $kembali = $_POST["kembali"];

    

    $pinjam = date('Y-m-d', strtotime("$pinjam"));
    $kembali = date('Y-m-d', strtotime("$kembali"));
    var_dump($pinjam);
    var_dump($kembali);

    $input="insert into tgl (pinjam,kembali)
			VALUES ('$pinjam','$kembali')";
            $hasil = mysql_query($input,$conn);
?>