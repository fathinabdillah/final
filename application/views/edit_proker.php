<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>

	<div class="container" style="margin-top: 80px">
		<h2>Edit Anggota Proker</h2><br>
		<div class="col-md-12">
			<form action="<?php echo site_url('hmif/update_hmifproker/'.$b->id)?>" method="post" enctype="multipart/form-data">
			  
			  <div class="form-group">
			    <label for="text">Judul</label>
			    <input type="text" name="judul" value="<?php echo $b->judul ?>" class="form-control" placeholder="Masukkan Judul">
			    <input type="hidden" value="<?php echo $b->id ?>" name="id">
			  </div>

			  <div class="form-group">
			    <label for="text">Jadwal</label>
			    <input type="text" name="jadwal" value="<?php echo $b->jadwal ?>" class="form-control" placeholder="Masukkan Jadwal">
			  </div>

			  <div class="form-group">
			    <label for="text">Kompartemen</label>
			    <input type="text" name="kompartemen" value="<?php echo $b->kompartemen ?>" class="form-control" placeholder="Masukkan Kompartemen">
			  </div>

			  <div class="form-group">
			    <label for="text">Detail</label>
			    <input type="text" name="detail" value="<?php echo $b->detail ?>" class="form-control" placeholder="Masukkan Detail">
			  </div>

			  <input type="hidden" name="hidden_id" value="<?php echo $b->id; ?>"></input>
			  <button type="submit" class="btn btn-md btn-success">Update</button>
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