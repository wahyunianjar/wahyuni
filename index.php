<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Sistem Informasi Pariwisata</h1>

    <form action="proses-simpan.php" method="POST">
        <label>No</label>
        <input type="number" name="no_id">
        <br><br>
    
        <label>Nama</label>
        <input type="text" name="nama">
        <br><br>

        <label>Harga</label>
        <input type="number" name="harga_tiket">
        <br><br>

        <label>Alamat</label>
        <input type="text" name="alamat">
        <br><br>

        <input type="submit" value="simpan">
    </form>
    <br>
        <a href="lihat-wisata.php"><button> Daftar </button></a>
</body>
</html>