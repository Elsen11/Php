<!DOCTYPE html>
<html>
<head>
	<title>FORM DATA SISWA</title>
</head>
<body>
	<form >
		<table border="2" align="center" bgcolor="tomato">
			<tr>
				<th>ID</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Jenis Kelamin</th>
				<th>Tanggal Lahir</th>
				<th>Hobby</th>
				<th>Password</th>
				<th>action</th>
			</tr>
			<tr>
				<?php
				include "koneksi.php";
				$tampil="SELECT *FROM biodata";
				$sql=mysqli_query($koneksi,$tampil);
					while($data=mysqli_fetch_array($sql))
					{
					?>
					<td><?php echo $data['id'] ?> </td>
					<td><?php echo $data['nama'] ?> </td>
					<td><?php echo $data['alamat'] ?></td>
					<td><?php echo $data['jenis_kelamin'] ?> </td>
					<td><?php echo $data['tanggal_lahir'] ?> </td>
					<td><?php echo $data['hobby'] ?> </td>
					<td><?php echo $data['password'] ?></td>
					<td> 
						<a href="hapus.php?id=<?php echo $data[id] ?>">Hapus </a> |
						<a href="edit.php?id=<?php echo $data[id] ?>">Ubah</a>
					</td>
			</tr>
			<?php
				}
			?>
		</table>
	</form>
	<p align="center"><a href="form_biodata.php">tambah data</a></p>
	<?php 
	 echo phpinfo();
	 ?>
</body>
</html>