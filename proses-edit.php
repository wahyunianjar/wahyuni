<?php

include ('koneksi.php');



$no_id =$_POST['no_id'];
$nama =$_POST['nama'];
$harga_tiket =$_POST['harga_tiket'];
$alamat =$_POST['alamat'];

$edit = "UPDATE wisata SET nama = '$nama', harga_tiket = '$harga_tiket', alamat = '$alamat' WHERE no_id = '$no_id' ";


if (mysqli_query($conn, $edit)) {

	header('Location: lihat-wisata.php');
} else {
	echo "Gagal menyimpan perubahan ...";
}


?>