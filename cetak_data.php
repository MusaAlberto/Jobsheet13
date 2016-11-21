<html>
<head>
	<title></title>
	<link href="../PraktekBootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body onload="window.print();">
<?php

// Connecting, selecting database
$link = mysql_connect('localhost', 'root','')
or die('Could not connect: ' . mysql_error());
/*echo 'Connected successfully'; */
mysql_select_db('showroommobil') or die('Could not select
database');

// Performing SQL query
$query = 'SELECT * FROM mobil';
$result = mysql_query($query) or die('Query failed: ' .
mysql_error());
?>

<!-- Tabel Menggunakan Bootstrap -->
<div class="container">
	<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Showroom Mobil</h3>
					</div>
					<div class="panel-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>ID_Mobil</th>
									<th>Merk</th>
									<th>Model</th>
									<th>Tipe</th>
									<th>Pintu</th>
									<th>Tahun_Produksi</th>
									<th>Negara_Pembuat</th>
									<th>Jenis_Produksi</th>
								</tr>
							</thead>
							<?php $no=0; while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) { ?>
							<tbody>
								<tr>
									<td><?php echo ++$no; ?></td>
									<?php foreach ($line as $col_value) {
										echo "<td>$col_value</td>";
									} ?>		
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
</html>