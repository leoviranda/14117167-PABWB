<!DOCTYPE html>
<html>
<head>
    <title>Tugas Form</title>
</head>
<body>
<div class="container">
	<h1>Data Mahasiswa</h1>
	<form action="TM_7hasil.php" method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<label for="nama">Nama:</label>
			<input type="text" class="form-control" name="nama">
		</tr>
		<br>
		<tr>
			<label for="alamat">Alamat:</label>
			<input type="text" class="form-control" name="alamat">
		</tr>
		<br>
		<tr>
			<label for="gender">Jenis Kelamin:</label>
			<br>
			<input type="radio" name="gender" value="Laki-laki" />Laki-laki
			<br>
            <input type="radio" name="gender" value="Perempuan" />Perempuan
        	<br>
		</tr>
		<br>
		<tr>
			<label for="goldar">Golongan Darah:</label>
			<br>
			<select name="goldar">
				<option value="A"> A</option>
				<option value="B"> B</option>
				<option value="AB"> AB</option>
				<option value="O"> O</option>
				</select>
		</tr><br><br>
		<tr>
			<label for="hobi">Hobby:</label><br>
			<input type="checkbox" name="hobi" value="Berenang"/> Membaca Buku<br>
			<input type="checkbox" name="hobi" value="Bernyanyi"/> Bernyanyi<br>
			<input type="checkbox" name="hobi" value="Menyusahkan"/> Menonton Film<br>
			<input type="checkbox" name="hobi" value="Bermalas"/> Belajar<br>
			<input type="checkbox" name="hobi" value="Rebahan"/> Rebahan<br>
			<input type="checkbox" name="hobi" value="Menggibah"/> Ngebucin<br>
		<br>
		</tr>
		<tr>
			<label for="keterangan">Keterangan:</label>
			<textarea name="keterangan" class="form-control"></textarea>
		</tr><br>
		<tr>
			<button type="submit" name="submit" class="btn btn-primary">Simpan</button>
		</tr>
	</table>
