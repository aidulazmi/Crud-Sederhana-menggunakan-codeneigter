<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>

	<center>
		 <?php foreach($user as $u){ ?>

		<form action="<?php echo site_url('c_mahasiswa/simpan_edit')?>" method="post">
			<p>
				<label>ID Mahasiswa</label>
				<input type="text" name="id_mahasiswa" placeholder="Please ID Mahasiswa" value="<?php echo $u->id_mahasiswa ?>" readonly> 
				<!-- readonly berguna supaya data tidak bisa dirubah tp tetap bisa di proses -->
			</p>
			<p>
				<label>Nama Lengkap</label>
				<input type="text" name="nama_lengkap" value="<?php echo $u->nama_lengkap ?>" placeholder="Please Nama Lengkap" required>
			</p>
			<p>
				<label>NIM</label>
				<input type="text" name="nim" placeholder="Please NIM"  value="<?php echo $u->nim ?>"required>
			</p>
			<p>
				<label>Jurusan</label>
				<select name="jurusan">
					<option value="<?php echo $u->jurusan ?>"><?php echo $u->jurusan ?></option>
					<option value="">----Silahkan Pilih Jurusan----</option>
					<option value="si">Sistem Informasi</option>
					<option value="tif">Teknik Informatika</option>
					<option value="te">Teknik Elektro</option>
					<option value="mater">Matimatika Terapan</option>
				</select>
			</p>
			<p>
				<label>Alamat</label>
				<input type="text" name="alamat" value="<?php echo $u->alamat ?>" placeholder="Jl.xxxxxxxx">
			</p>
			<p>
				<label>No HP</label>
				<input type="text" name="no_hp" value="<?php echo $u->no_hp ?>" placeholder="08xxxxxxxxxx">
			</p>
		
			<button type="submit" value="Ubah">Ubah</button>
			<button type="reset" value="Reset">Hapus</button>

		</form>
		<?php } ?>
	</center>

</body>
</html>