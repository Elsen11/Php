<!DOCTYPE html>
<html>
<head>
	<title>FORM BIODATA</title>
</head>
<body>
	<form action="simpan1.php" method="POST" >
		<table border="2" align="center" bgcolor="tomato">
			<tr>
				<td colspan="3">FORM BIODATA</td>
			</tr>
			<tr>
				<td>Nama </td>
				<td> : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td> : </td>
				<td><textarea name="alamat"></textarea></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td> : </td>
				<td>
					<input type="radio" name="jenis_kelamin" value="laku-laki">pria
					<input type="radio" name="jenis_kelamin" value="perempuan">wanita
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td> : </td>
				<td>
					<select name="tgl">
						<?php $i=1; while($i<=31) { 
							echo "<option value='$i'>$i</option>";
							$i++;
						}?>
					</select>
					<select name="bln">
						<?php $i=1; while($i<=12) { 
							echo "<option value='$i'>$i</option>";
							$i++;
						}?>
					</select>
					<input type="text" name="thn">
				</td>
			</tr>
			<tr>
				<td>Hobby</td>
				<td> : </td>
				<td>
					<input type="checkbox" name="hobby[]" value="travel">travel<br>
					<input type="checkbox" name="hobby[]" value="drawing">drawing<br>
					<input type="checkbox" name="hobby[]" value="play game">play game<br>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td> : </td>
				<td>
					<input type="password" name="password">
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center"> 
					<input type="submit" value="kirim" onClick="cheknama(this.form)">
					<input type="reset" name="reset">
				</td>
			</tr>
			<script type="text/javascript">
				function cheknama(form)
				{
					if(form.elements[0].value=="")
					{
						alert('nama wajib dimasukan');
						form.nama.focus();
						form.nama.select();
						return false;
					}
					else 
					{
						alert('terima kasih'+form.elements[1].value);
						return true;
					}
				}

			</script>
		</table>
	</form>

	<?
echo "adsad";
	?>
</body>
</html>