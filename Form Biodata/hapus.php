<?php
include "koneksi.php";
$id=$_REQUEST[id];

$hapus="DELETE FROM mahasiswa WHERE id=$id";

$sql=mysqli_query($koneksi,$hapus);

if($sql)
{
	echo "<script>alert('Data berhasil dihapus');location.href='tampil.php'</script>;";
}
else
{
	echo"<script>alert('Data gagal dihapus');windows.history.go(-1)</script>;";
}
