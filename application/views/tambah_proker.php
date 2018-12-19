<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>

	<div class="container" style="margin-top: 80px">
		<h2>Tambah Anggota Proker</h2><br>
		<div class="col-md-12">
			<form action="<?php echo site_url('hmif/admin_inputproker')?>" method="post" enctype="multipart/form-data">
			  
			  <div class="form-group">
			    <label for="text">Judul </label>
			    <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul">
			  </div>

			  <div class="form-group">
			    <label for="text">Jadwal </label>
			    <input type="text" name="jadwal" class="form-control" placeholder="Masukkan Jadwal">
			  </div>
			  <div class="form-group">
			    <label for="text">Kompartemen </label>
			    <input type="text" name="kompartemen" class="form-control" placeholder="Masukkan Kompartemen">
			  </div>

			  <div class="form-group">
			    <label for="text">Detail </label>
			    <input type="text" name="detail" class="form-control" placeholder="Masukkan Detail">
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