<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>

	<center>
		<form action="<?php echo site_url('c_mahasiswa/tambah')?>" method="post">
			<p>
				<label>ID Mahasiswa</label>
				<input type="text" name="id_mahasiswa" placeholder="Please ID Mahasiswa" required> 
				<!-- required berguna supaya data tidak boleh kosong -->
			</p>
			<p>
				<label>Nama Lengkap</label>
				<input type="text" name="nama_lengkap" placeholder="Please Nama Lengkap" required>
			</p>
			<p>
				<label>NIM</label>
				<input type="text" name="nim" placeholder="Please NIM" required>
			</p>
			<p>
				<label>Jurusan</label>
				<select name="jurusan">
					<option value="">----Silahkan Pilih Jurusan----</option>
					<option value="si">Sistem Informasi</option>
					<option value="tif">Teknik Informatika</option>
					<option value="te">Teknik Elektro</option>
					<option value="mater">Matimatika Terapan</option>
				</select>
			</p>
			<p>
				<label>Alamat</label>
				<input type="text" name="alamat" placeholder="Jl.xxxxxxxx">
			</p>
			<p>
				<label>No HP</label>
				<input type="text" name="no_hp" placeholder="08xxxxxxxxxx">
			</p>
		
			<button type="submit" value="Simpan">Simpan</button>
			<button type="reset" value="Reset">Hapus</button>

		</form>
	</center>

</body>
</html>