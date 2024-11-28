<?php
session_start();
include("../koneksi.php");

if (isset($_GET['penumpang_id'])){
    $id = $_GET['penumpang_id'];

    $sql = "DELETE FROM tb_penumpang WHERE penumpang_id = $id";
    $query = mysqli_query($db, $sql);

    if ($query){
        $_SESSION['notifikasi'] = "data berhasil dihapus";
    } else {
        $_SESSION['notifikasi'] = "data gagal dihapus";
    }
    header('Location: index.php');
} else {
    die("ditolak");
}
?>