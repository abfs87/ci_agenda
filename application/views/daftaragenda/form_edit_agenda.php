<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Daftar Hadir Pratikum</title>
	
	</head>
	<body>
		<h2>
			Form Edit Agenda
		</h2>
		<fieldset>
			<form action="<?php echo site_url('daftaragenda/proses_edit_agenda');?>" method="POST">
				Nama:<br/><textarea name="nama" cols="50" rows="5"><?php echo $agenda->nama; ?></textarea><br/><br/>
				Keterangan:<br/><textarea name="keterangan" cols="50" rows="5"><?php echo $agenda->keterangan ?></textarea><br/><br/>
				<input type="hidden" name="id_agenda" value="<?php echo $agenda->id_agenda;?>">
				<input type="submit" value="Ubah">
			</form>
		</fieldset>		
	</body>
</html>