<?php
include "koneksi.php";
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$jurusan=$_POST['jurusan'];
$ipk=$_POST['ipk'];

$query="INSERT INTO mahasiswa(nama,nim,jurusan,ipk) VALUES ('$nama','$nim','$jurusan','$ipk')";

$sql=mysqli_query($koneksi,$query);

if($sql)
{
	echo "<script>alert('data berhasil disimpan'); location.href='tampil.php'</script>";
}
else
{
	echo "<script>alert('data gagal disimpan');windows.history.go(-1)</script>";
}

?>