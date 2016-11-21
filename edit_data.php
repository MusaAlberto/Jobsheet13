<?php
$Id_Mobil = $_GET['id'];

// Koneksi Database
mysql_connect('localhost', 'root', '');

// Memilih Database
mysql_select_db('showroommobil');

// query
$query = "SELECT * FROM `mobil` WHERE `Id_Mobil` = '$Id_Mobil'";
$result = mysql_query($query);

// Mengambil Data
$data = mysql_fetch_array($result);
?>

<html>
<head>
	<title>Update Data</title>
	<link href="../PraktekBootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
		<div class="row">
                <div class="col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h3>Tambah Data</h3>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="update_data.php" method="POST">
                                <div class="form-group">
                                    <label for="exampleTextInput">ID Mobil</label>
                                    <input type="text" 
                                    class="form-control" 
                                    placeholder="ID Mobil" 
                                    name="Id_Mobil" 
                                    value="<?php echo $data['Id_Mobil']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleTextInput">Merk</label>
                                    <input type="text" 
                                    class="form-control" 
                                    placeholder="Merk" 
                                    name="Merk"
                                    value="<?php echo $data['Merk']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleTextInput">Model</label>
                                    <input type="text" 
                                    class="form-control" 
                                    placeholder="Model" 
                                    name="Model"
                                    value="<?php echo $data['Model']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleTextInput">Tipe</label>
                                    <input type="text" 
                                    class="form-control" 
                                    placeholder="Tipe" 
                                    name="Tipe"
                                    value="<?php echo $data['Tipe']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleTextInput">Pintu</label>
                                    <input type="text" 
                                    class="form-control" 
                                    placeholder="Pintu" 
                                    name="Pintu"
                                    value="<?php echo $data['Pintu']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleTextInput">Tahun Produksi</label>
                                    <input type="text" 
                                    class="form-control" 
                                    placeholder="Tahun Produksi" 
                                    name="Tahun_Produksi"
                                    value="<?php echo $data['Tahun_Produksi']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleTextInput">Negara Pembuat</label>
                                    <input type="text" 
                                    class="form-control" 
                                    placeholder="Negara Pembuat" 
                                    name="Negara_Pembuat"
                                    value="<?php echo $data['Negara_Pembuat']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleTextInput">Jenis Produksi</label>
                                    <input type="text" 
                                    class="form-control" 
                                    placeholder="Jenis Produksi" 
                                    name="Jenis_Produksi"
                                    value="<?php echo $data['Jenis_Produksi']; ?>">
                                </div>  

                                <button type="submit" class="btn btn-primary">Update</button>                    
                            </form>
                        </div>    
</body>
</html>