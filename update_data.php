<?php
$Id_Mobil = $_POST['Id_Mobil'];
$Merk = $_POST['Merk'];
$Model = $_POST['Model'];
$Tipe = $_POST['Tipe'];
$Pintu = $_POST['Pintu'];
$Tahun_Produksi = $_POST['Tahun_Produksi'];
$Negara_Pembuat = $_POST['Negara_Pembuat'];
$Jenis_Produksi = $_POST['Jenis_Produksi'];

// Koneksi Database
$link = mysql_connect('localhost', 'root','');

// Memilih Database
mysql_select_db('showroommobil');

// Query
$query = "UPDATE `showroommobil`.`mobil` SET `Id_Mobil` = '$Id_Mobil', `Model` = '$Model', `Tipe` = '$Tipe', `Pintu` = '$Pintu', `Tahun_Produksi` = '$Tahun_Produksi', `Negara_Pembuat` = '$Negara_Pembuat', `Jenis_Produksi` = '$Jenis_Produksi' WHERE `mobil`.`Id_Mobil` = '$Id_Mobil';";
$result = mysql_query($query);

if ($result) {
		echo 'Berhasil Mengupdate Data';
	}else {
		echo 'Gagal Mengupdate Data';
	}
	echo "<a href='pengembangan.php'>Kembali</a>";
?>
