<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data Mahasiswa</title>
</head>
<body>
	<table border="3" bgcolor="tomato" align="center">
		<tr>
			<th>Nama</th>
			<th>NIM</th>
			<th>Jurusan</th>
			<th>IPK</th>
			<th>Action</th>
		</tr>
		<tr>
			<?php
				include "koneksi.php";
				$tampil="SELECT *FROM mahasiswa";
				$sql=mysqli_query($koneksi,$tampil);

				while($data=mysqli_fetch_array($sql)){
			?>
				<tr>
					<td><?php echo $data['nama'] ?></td>
					<td><?php echo $data['nim'] ?></td>
					<td><?php echo $data['jurusan'] ?></td>
					<td><?php echo $data['ipk'] ?></td>
					<td><a href="hapus.php?id=<?php  echo $data['id']?>">Hapus</a> | <a href="edit.php?id=<?php echo $data['id']?>">ubah</a></td>
				</tr>
			<?php
				}
			?>
		</tr>

	</table>

</body>
</html>