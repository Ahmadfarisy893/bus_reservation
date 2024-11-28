<?php
include("../koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penumpang</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
       <a href="../penumpang/index.php">Data Penumpang</a> <br>
       <a href="../rute/index.php">Rute Perjalanan</a>

    <h2>Penumpang</h2>
    <?php
    if(isset($_SESSION['notifikasi'])): ?>
    <p><?php echo $_SESSION['notifikasi']; ?></p>
    <?php unset($_SESSION['notifikasi']); ?>
    <?php endif; ?>

    <table>
        <thead>
            <tr align="center">
                <th>#</th>
                <th>Nama Penumpang</th>
                <th>kontak</th>
                <th><a href="tambah_penumpang.php">Tambah</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = $db->query("SELECT * FROM tb_penumpang");
            while ($penumpang = $query->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $penumpang['nama'] ?></td>
                    <td><?php echo $penumpang['kontak'] ?></td>

                    <td align="center">
                    <a href="edit_penumpang.php?penumpang_id=<?php echo $penumpang['penumpang_id']?> ">Edit</a>
                    <a onclick="return confirm('anda yakin ingin menghapus data ini?')" href="hapus_penumpang.php?penumpang_id=<?php echo $penumpang['penumpang_id']?> ">hapus</a>
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