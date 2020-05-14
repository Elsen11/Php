<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title> FORM MAHASISWA </title>
</head>

<body>
	<form method="post" action="simpan.php">
		<table border="3" bgcolor="greensky" align="center">
			<tr>
				<td colspan="3">
					FORM MAHASISWA
				</td>
			</tr>
			<tr>
				<td>Nama </td>
				<td> : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM </td>
				<td> : </td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>jurusan</td>
				<td> : </td>
				<td>
					<input type="radio" name="jurusan" value="TI">TI<br>
					<input type="radio" name="jurusan" value="SI">SI<br>
					<input type="radio" name="jurusan" value="SK">SK<br>
				</td>
			</tr>
			<tr>
				<td>IPK</td>
				<td> : </td>
				<td><input type="text" name="ipk"></td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<input type="submit" value="kirim">
					<input type="reset" value="reset">
				</td>
			</tr>

		</table>
	</form>
</body>

</html>