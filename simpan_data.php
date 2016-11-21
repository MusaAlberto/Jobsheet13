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
$query = "INSERT INTO `showroommobil`.`mobil`" 
		."(`Id_Mobil`, `Merk`, `Model`, `Tipe`, `Pintu`, `Tahun_Produksi`, `Negara_Pembuat`, `Jenis_Produksi`)"
		.  "VALUES ('$Id_Mobil', '$Merk', '$Model', '$Tipe', '$Pintu', '$Tahun_Produksi', '$Negara_Pembuat', '$Jenis_Produksi');";
$result = mysql_query($query);

if ($result) {
		echo 'Berhasil Menyimpan Data';
	}else {
		echo 'Gagal Menyimpan Data';
	}
	echo "<a href='lihat_data.php'>Kembali</a>";
?>
