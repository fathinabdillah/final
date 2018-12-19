<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>

	<div class="container" style="margin-top: 80px">
		<h2>Tambah Data Pengurus</h2><br>
		<div class="col-md-12">
			<form action="<?php echo site_url('hmif/admin_input')?>" method="post" enctype="multipart/form-data">
			  
			  <div class="form-group">
			    <label for="text">Nama </label>
			    <input type="text" name="nama_hmif" class="form-control" placeholder="Masukkan Nama">
			  </div>

			  <div class="form-group">
			    <label for="text">NIM </label>
			    <input type="text" name="nim_hmif" class="form-control" placeholder="Masukkan NIM">
			  </div>

			  <div class="form-group">
			    <label for="text">Jabatan</label>
			    <input type="text" name="jabatan_hmif" class="form-control" placeholder="Masukkan Jabatan">
			  </div>

			  <div class="form-group">
			    <label for="text">Foto</label>
			    <input type="file" name="foto_hmif" class="form-control" >
			  </div>
			  
			  <button type="submit" class="btn btn-md btn-success">Simpan</button>
			  <button type="reset" class="btn btn-md btn-warning">reset</button>
			</form>
		</div>
	</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
	$('#table').DataTable( {
    autoFill: true
} );
</script>
</body>
</html>