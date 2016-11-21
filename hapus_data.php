<?php
	$id_mobil = $_GET['idx'];

	// Koneksi Database
	$link = mysql_connect('localhost', 'root','')
	or die('Could not connect: ' . mysql_error());
	//echo 'Connected successfully';

	// Memilih database
	mysql_select_db('showroommobil') or die('Could not select database');

 
	// Query
	$query = "DELETE FROM `showroommobil`.`mobil` WHERE `mobil`.`Id_Mobil` = '$id_mobil'";

	// echo $query;
	$hasil = mysql_query($query) or die('Tidak bisa query') ;

	if ($hasil) {
		echo 'Berhasil Menghapus Data';
	}else {
		echo 'Tidak Berhasil Menghapus Data';
	}
	echo "<a href='lihat_data.php'>Kembali</a>";
?>


