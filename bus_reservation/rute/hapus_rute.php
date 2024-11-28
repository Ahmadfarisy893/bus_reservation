<?php
session_start();
include("../koneksi.php");

if (isset($_GET['rute_id'])){
    $id = $_GET['rute_id'];

    $sql = "DELETE FROM tb_rute WHERE rute_id = $id";
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