<?php

$no_id =$_POST['no_id'];
$nama =$_POST['nama'];
$harga_tiket =$_POST['harga_tiket'];
$alamat =$_POST['alamat'];

include 'koneksi.php';

$sql = "INSERT INTO wisata VALUES ('$no_id', '$nama', '$harga_tiket', '$alamat')";

if (mysqli_query($conn, $sql)) {
    echo " Data Berhasil Disimpan";
}else {
    echo "Error:" . $sql . "<br>" . mysqli_error($conn);
    echo "<a href= 'index.php'> Isi Data lagi<a/>";


}
?>