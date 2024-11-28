<?php
session_start();
include("../koneksi.php");

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $kontak = $_POST['kontak'];

    $sql = "INSERT INTO tb_penumpang
            (nama, kontak) VALUES ('$nama', '$kontak')";

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