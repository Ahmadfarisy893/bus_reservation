<?php
session_start();
include("../koneksi.php");
if(isset($_POST['simpan'])){
    $kotaAsal = $_POST['kotaAsal'];
    $kotaTujuan = $_POST['kotaTujuan'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO tb_rute
     VALUES ('','$kotaAsal','$kotaTujuan' ,'$harga')";

$query = mysqli_query($db, $sql);
    
if($query){
    $_SESSION['notifikasi'] = "data berhasil ditambahkan";
} else {
    $_SESSION['notifikasi'] = "data gagal ditambahkan";
}
header('Location: index.php');
}else{
    die("ditolak...");
}
?>