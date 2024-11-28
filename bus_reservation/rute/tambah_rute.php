<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>pilih tujuan</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
        <tr>
                <td>Kota Asal</td>
                <td><input type="text" name="kotaAsal" required></td>
        </tr>
        <tr>
                <td>Kota Tujuan</td>
                <td><input type="text" name="kotaTujuan" required></td>
        </tr>
        <tr>
                <td>harga</td>
                <td><input type="text" name="harga" required></td>
        </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>