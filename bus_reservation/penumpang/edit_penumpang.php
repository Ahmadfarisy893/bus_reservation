<?php
include("../koneksi.php");
$id = $_GET['penumpang_id'];
$query = $db->query("SELECT * FROM tb_penumpang WHERE penumpang_id ='$id'");
$pnumpang = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h3>edit data</h3>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="penumpang_id" value="<?php echo $pnumpang['penumpang_id']; ?>" required>
        <table>
            <tr>
                <td>Nama Penumpang</td>
                <td>
                    <input type="text" name="nama" value="<?php echo $pnumpang['nama']; ?> " required>
                    
                </td>
            </tr>
            <tr>
                <td>Kontak</td>
                <td>
                    <input type="text" name="kontak" value="<?php echo $pnumpang['kontak']; ?> " required>

                </td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>

    </form>
</body>
</html>
