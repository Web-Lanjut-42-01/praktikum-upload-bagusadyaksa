<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo base_url().'control/tambah_aksi'; ?>" enctype="multipart/from-data" method="POST">
		<table>
			<tr>
				<td>Nama Makanan</td>
				<td><input type="text" name="nama_makanan"></td>
			</tr>
			<tr>
				<td>Harga Makanan</td>
				<td><input type="text" name="harga_makanan"></td>
			</tr>
			<tr>
				<td>Foto Makanan</td>
				<td><input type="file" name="foto_makanan"></td>
			</tr>
		</table>
		<input type="submit" name="Kirim">
	</form>
</body>
</html>