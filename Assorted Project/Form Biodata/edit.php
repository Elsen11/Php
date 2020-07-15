<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> FORM MAHASISWA </title>
</head>
<body>
	<?php
		include "koneksi.php";

		$id=$_REQUEST['id'];

		$edit="SELECT *FROM mahasiswa WHERE id=$id";

		$sql=mysqli_query($koneksi,$edit);

		$data=mysqli_fetch_array($sql);
		
	?>
	<form  method="post" action="update.php?id=<?php echo $data['id'] ?>">
		<table border="3" bgcolor="greensky" align="center">
			<tr>
				<td colspan="3">
					FORM MAHASISWA
				</td>
			</tr>
			<tr>
				<td>Nama </td>
				<td> : </td>
				<td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>
			</tr>
			<tr>
				<td>NIM </td>
				<td> : </td>
				<td><input type="text" name="nim" value="<?php echo $data['nim'] ?>"></td>
			</tr>
			<tr>
				<td>jurusan</td>
				<td> : </td>
				<td>
					<input type="radio" name="jurusan" value="TI" 
					<?php 
					if($data['jurusan']=="TI")
					echo "checked=checked"; ?> 
					>TI<br>
					
					<input type="radio" name="jurusan" value="SI"
					<?php 
					if ($data['jurusan']=="SI")
					echo "checked=checked"; ?>
					>SI<br>
					<input type="radio" name="jurusan" value="SK" 
					<?php 
					if($data['jurusan']=="SK")
					echo "checked=checked";?>
					>SK<br>

				</td>
			</tr>
			<tr>
				<td>IPK</td>
				<td> : </td>
				<td><input type="text" name="ipk" value="<?php echo $data['ipk'] ?>"></td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<input type="submit" value="edit">
					<input type="reset" value="reset" >
				</td>
			</tr>
		</table>
	</form>
</body>
</html>