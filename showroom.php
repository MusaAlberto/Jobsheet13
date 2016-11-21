<html>
<head>
	<title>Koneksi ke MySQL</title>
	<link href="../PraktekBootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php

// Connecting, selecting database
$link = mysql_connect('localhost', 'root','')
or die('Could not connect: ' . mysql_error());
//echo 'Connected successfully';
mysql_select_db('showroommobil') or die('Could not select
database');

// Performing SQL query
$query = 'SELECT * FROM mobil';
$result = mysql_query($query) or die('Query failed: ' . mysql_error());
?>

<!-- Tabel Menggunakan Bootstrap -->
<div class="container">
	<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Showroom Mobil</h3>
					</div>
					<div class="panel-body">
						<a href="tambah_data.php" class="btn btn-warning"><span class="glyphicon glyphicon-plus"></span>Tambah</a>
						<a href="cetak_data.php" class="btn btn-success"><span class="glyphicon glyphicon-print"></span>Cetak</a>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>ID Mobil</th>
									<th>Merk</th>
									<th>Model</th>
									<th>Tipe</th>
									<th>Pintu</th>
									<th>Tahun Produksi</th>
									<th>Negara Pembuat</th>
									<th>Jenis Produksi</th>
									<th>Operasi</th>
								</tr>
							</thead>
							<?php $no=0; while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) { ?>
							<tbody>
								<tr>
									<td><?php echo ++$no; ?></td>
									<?php foreach ($line as $col_value) {
										echo "<td>$col_value</td>";
									} ?>	
								<td>
									<a href="edit_data.php?id=<?php echo $line['Id_Mobil'];?>" type="button" class="btn btn-sm btn-primary">Edit</a>
									<a href="hapus_data.php?idx=<?php echo $line['Id_Mobil'];?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?');" >Hapus</a>
									</td>	
								</tr>
							</tbody>
							<?php } ?>
						</table>
					</div>			
</div>

<?php
// Printing results in HTML
echo "<table>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
echo "\t<tr>\n";
foreach ($line as $col_value) {
echo "\t\t<td>$col_value</td>\n";
}
echo "\t</tr>\n";
}
echo "</table>\n";

// Free resultset
mysql_free_result($result);

// Closing connection
mysql_close($link);
?>
</body>
\
</html>