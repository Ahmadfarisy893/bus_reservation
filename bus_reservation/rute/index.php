<?php
include("../koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bus</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
        <a href="../penumpang/index.php">Data Penumpang</a> <br>
        
        <a href="../rute/index.php">Rute Perjalanan</a>

    <h2>Bus</h2>
    <?php
    if (isset($_SESSION['notifikasi'])): ?>
    <p><?php echo $_SESSION['notifikasi']; ?></p>
    <?php unset($_SESSION['notifikasi']); ?>
    <?php endif; ?>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Kota asal</th>
                <th>kota tujuan</th>
                <th>harga</th>
                <th><a href="tambah_rute.php">Tambah</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = $db->query("SELECT * FROM tb_rute");
            while ($rute = $query->fetch_assoc()){

                ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $rute['kota_asal'] ?></td>
                <td><?php echo $rute['kota_tujuan'] ?></td>
                <td><?php echo $rute['harga'] ?></td>
                <td>
                    <a href="edit_rute.php?rute_id=<?php echo $rute['rute_id']?>">Edit</a>
                    <a onclick="return confirm(' anda yakin ingin menghapus data ini?')" href="hapus_rute.php?rute_id=<?php echo $rute['rute_id']?>">hapus</a>
                </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query)?></p>
</body>
</html>