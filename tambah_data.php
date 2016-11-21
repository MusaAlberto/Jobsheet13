<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
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
                            <form action="simpan_data.php" method="POST">
                                <div class="form-group">
                                    <label for="exampleTextInput">ID Mobil</label>
                                    <input type="text" class="form-control" placeholder="" name="Id_Mobil">
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextInput">Merk</label>
                                    <input type="text" class="form-control" placeholder="" name="Merk">
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextInput">Model</label>
                                    <input type="text" class="form-control" placeholder="" name="Model">
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextInput">Tipe</label>
                                    <input type="text" class="form-control" placeholder="" name="Tipe">
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextInput">Pintu</label>
                                    <input type="text" class="form-control" placeholder="" name="Pintu">
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextInput">Tahun Produksi</label>
                                    <input type="text" class="form-control" placeholder="" name="Tahun_Produksi">
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextInput">Negara Pembuat</label>
                                    <input type="text" class="form-control" placeholder="" name="Negara_Pembuat">
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextInput">Jenis Produksi</label>
                                    <input type="text" class="form-control" placeholder="" name="Jenis_Produksi">
                                </div>  
                                <button type="submit" class="btn btn-primary">Simpan</button>                    
                            </form>
                        </div>    
</body>
</html>