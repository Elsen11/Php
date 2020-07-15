<?php
include "koneksi.php";
$id=$_REQUEST['id'];
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$jurusan=$_POST['jurusan'];
$ipk=$_POST['ipk'];

$update="UPDATE mahasiswa SET nama='$nama',
							nim='$nim',
							jurusan='$jurusan',
							ipk='$ipk'
							WHERE id='$id'";

$sql=mysqli_query($koneksi,$update);

if($sql)
{
	echo "<script>alert('data berhasil diupdate'); location.href='tampil.php'</script>";
}
else
{
	echo "<script>alert('data gagal diupdate');windows.history.go(-1)</script>";
}

?>