<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<h1 style="text-align: center">Daftar Pariwisata</h1>

<a href="index.php">tambah wisata</a>
<br>
<br>

<table border="1">
    <tr>
        <th>No_ID</th>
        <th>Nama</th>
        <th>Harga_Tiket</th>
        <th>Alamat</th>
</tr>

<?php
include 'koneksi.php';

$query =" SELECT*FROM wisata";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result)>0){
    while($data = mysqli_fetch_assoc($result)) {?>
    <tr>
        <td><?php echo $data["no_id"]?></td>
        <td><?php echo $data["nama"]?></td>
        <td><?php echo $data["harga_tiket"]?></td>
        <td><?php echo $data["alamat"]?></td>
    <td>
        <button>hapus</button>
    <a href="edit.php?no_id=<?php echo $data["no_id"]?>">edit</a>

    </td>
    </tr>
<?php }
}else {
    echo "tidak ada data";
} ?>