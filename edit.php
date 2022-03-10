<?php
include("koneksi.php");

if(!isset($_GET['no_id']) ){
    header('location: lihat-wisata.php');
}

$no_id = $_GET['no_id'];

$sql = "SELECT * FROM wisata WHERE no_id = '$no_id'";
$query = mysqli_query($conn, $sql);

if(mysqli_num_rows($query) == 1){
    $data = mysqli_fetch_array($query);
}

?>

<!DOCTYPE html>
<htmml lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
        <meta name="viewport"content="width=device-width,initial-scale=1.0">
        <title></title>
</head>
<body>

<form action="proses-edit.php" method="POST">

<label>ID</label>
<br>
<input type="number" name="no_id">
<br><br>

<label>nama</label>
<br>
<input type="text" name="nama">
<br><br>

<label>Harga_Tiket</label>
<br>
<input type="number" name="harga_tiket">
<br><br>

<label>alamat</label>
<br>
<input type="text"  name="alamat">
<br><br>

<input type="submit" value="simpan">

</form>

</body>
</html>


