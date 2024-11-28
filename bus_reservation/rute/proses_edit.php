<?php
session_start();
include("../koneksi.php");

if (isset($_POST['simpan'])){
    $id = $_POST['rute_id'];
    $kotaAsal = $_POST['kota_asal'];
    $kotaTujuan = $_POST['kota_tujuan'];
    $harga = $_POST['harga'];

    $sql = "UPDATE tb_rute set
    kota_asal = '$kotaAsal',
    kota_tujuan = '$kotaTujuan',
    harga = '$harga'
    WHERE rute_id = $id";

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

