<?php
session_start();
include("../koneksi.php");

if (isset($_POST['simpan'])){
    $id = $_POST['penumpang_id'];
    $nama = $_POST['nama'];
    $kontak = $_POST['kontak'];

    $sql = "UPDATE tb_penumpang set
    nama = '$nama',
    kontak = '$kontak'
    WHERE penumpang_id = $id";

    $query = mysqli_query($db, $sql);
    if ($query){
        $_SESSION['notifikasi'] = "data berhasil dirubah";
    } else {
        $_SESSION['notifikasi'] = "data gagal di rubah";
    }
    header('location: index.php');
} else {
    die("ditolak");
}
?>

