<?php
	include "koneksi.php";
	$nama = $_POST['nama'];
	$alamat=$_POST['alamat'];
	$jk=$_POST['jenis_kelamin'];
	$TTL=$_POST['thn']."-".$_POST['bln']."-".$_POST['tgl'];
	$hobby_array=$_POST['hobby'];
	$hobby=implode(",",$hobby_array);
	$password=$_POST['password'];

	$simpan="INSERT INTO biodata (nama,alamat,jenis_kelamin,tanggal_lahir,hobby,password) VALUES ('$nama','$alamat','$jk','$TTL','$hobby','$password')";
	$sql=mysqli_query($koneksi,$simpan);

	if($sql)
	{
		echo "<script>alert('data berhasil disimpan'); location.href='tampil.php';</script>";
	}
	else
	{
		echo "<script>alert('data gagal disimpan');windows.history.go(-1);</script>";
	}
?>