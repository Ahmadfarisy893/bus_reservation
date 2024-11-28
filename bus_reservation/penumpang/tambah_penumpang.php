<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<body>
    <h3>Tambah Penumpang</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>Nama Penumpang</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Kontak</td>
                <td><input type="text" name="kontak" required></td>
            </tr>
        </table>
        <button type="submit" name="simpan">simpan</button>
    </form>
</body>
</html>