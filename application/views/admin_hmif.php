<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
	<style>
		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #333;
		}

		li {
			float: left;
			border-right:1px solid #bbb;
		}

		li:last-child {
			border-right: none;
		}

		li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		li a:hover:not(.active) {
			background-color: #111;
		}

		.active {
			background-color: #4CAF50;
		}
	</style>
</head>
<body>
	<nav>
		<ul>
			<li><a class="active" href="<?php echo site_url('hmif/admin')?>">Pengurus</a></li>
			<li><a href="<?php echo site_url('hmif/anggota')?>">Anggota</a></li>
			<li><a href="<?php echo site_url('hmif/proker')?>">Proker</a></li>
			<li style="float:right"><a href="#">hmif</a></li>
		</ul>
	</nav>

	<div class="container" style="margin-top: 80px">
		<?php echo $this->session->flashdata('notif') ?>
		<a href="<?php echo site_url('hmif/tambah')?>" class="btn btn-md btn-success">Tambah Anggota</a>
		<hr>
		<!-- table -->
		<div class="table-responsive">
			<table id="table" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama</th>
						<th>NIM</th>
						<th>Jabatan</th>
						<th>Foto</th>
						<th>Options</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1; 
					foreach($dbhmif as $hasil){ 
						?>

						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $hasil['nama_hmif'] ?></td>
							<td><?php echo $hasil['nim_hmif'] ?></td>
							<td><?php echo $hasil['jabatan_hmif'] ?></td>
							<td><img width="120" height="80" src="<?php echo base_url()?>img/hmif/<?php echo $hasil['foto_hmif']?>"></td>
							<td>
								<a href="<?php echo site_url('hmif/edit/'.$hasil['id_hmif']) ?>" class="btn btn-sm btn-success">Edit</a>
								<a href="<?php echo site_url('hmif/delete/'.$hasil['id_hmif']) ?>" class="btn btn-sm btn-danger">Hapus</a>
							</td>
						</tr>

						<?php } ?>

					</tbody>
				</table>
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