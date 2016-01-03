<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Daftar Hadir Pratikum</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<h2>Daftar Agenda</h2>
		<a href="<?php echo site_url('daftaragenda/tambah_agenda');?>">Tambah Agenda</a><br/><br/>
		<?php foreach ($daftar_agenda as $agenda) {?>
			<fieldset>
				<h3><?php echo $agenda->nama; ?></h3>
				<a href="<?php echo site_url('daftaragenda/edit_agenda/'.$agenda->id_agenda);?>">Edit</a>
				<a href="<?php echo site_url('daftaragenda/delete_agenda/'.$agenda->id_agenda);?>">Delete</a>
				<br/>
				<p>
					<?php echo $agenda->keterangan; ?>
				</p>
			</fieldset>
			<br/>
		<?php } ?>
	</body>
</html>