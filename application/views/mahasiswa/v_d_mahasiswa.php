<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<a href="c_mahasiswa/form_input">Tambah Data Mahasiswa</a>
	<table border="1">
		<tr>
			<th>ID Mahasiswa</th>
			<th>Nama Lengkap</th>
			<th>NIM</th>
			<th>Alamat</th>
			<th>Jurusan</th>
			<th>No Hp</th>
			<th>Action</th>
		</tr>	
		<?php foreach($user as $u){ ?>
		<tr>
			<td><?php echo $u->id_mahasiswa ?></td>
			<td><?php echo $u->nama_lengkap ?></td>
			<td><?php echo $u->nim ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->jurusan ?></td>
			<td><?php echo $u->no_hp ?></td>
			<td>
				<a href="<?php echo site_url('c_mahasiswa/p_edit/'.$u->id_mahasiswa);?>">Edit</a> || <a href="<?php echo site_url('c_mahasiswa/hapus/'.$u->id_mahasiswa);?>">Hapus</a>
			</td>
		</tr>	
			 <?php } ?>
		<tr>
			<th>ID Mahasiswa</th>
			<th>Nama Lengkap</th>
			<th>NIM</th>
			<th>Alamat</th>
			<th>Jurusan</th>
			<th>No Hp</th>
			<th>Action</th>
		</tr>
	</table>


</body>
</html>