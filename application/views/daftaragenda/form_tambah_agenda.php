<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Daftar Hadir Pratikum</title>
	</head>
	<body>
		<h2>
			Form Tambah Agenda
		</h2>
		<fieldset>
			<form action="<?php echo site_url('daftaragenda/proses_tambah_agenda');?>" method="POST">
				Nama:<br/><textarea name="nama" cols="50" rows="5"></textarea><br/><br/>
				Keterangan:<br/><textarea name="keterangan" cols="50" rows="5"></textarea><br/><br/>
				<input type="submit" value="Tambah">
			</form>
		</fieldset>
	</body>
</html>