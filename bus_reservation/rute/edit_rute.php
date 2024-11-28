<?php
include("../koneksi.php");
$id = $_GET['rute_id'];
$query = $db->query("SELECT * FROM tb_rute WHERE rute_id ='$id'");
$rte = $query->fetch_assoc();
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
        <input type="hidden" name="rute_id" value="<?php echo $rte['rute_id']; ?>" required>
        <table>
            <tr>
                <td>kota asal</td>
                <td>
                    <input type="text" name="kota_asal" value="<?php echo $rte['kota_asal']; ?> " required>
                    
                </td>
            </tr>
            <tr>
                <td>kota tujuan</td>
                <td>
                    <input type="text" name="kota_tujuan" value="<?php echo $rte['kota_tujuan']; ?> " required>

                </td>
            </tr>
            <tr>
                <td>harga</td>
                <td>
                    <input type="text" name="harga" value="<?php echo $rte['harga']; ?> " required>

                </td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>

    </form>
</body>
</html>
