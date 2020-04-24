<?php
include '../koneksi.php';

if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $suhu = $_POST['suhu'];
    $tanggal = $_POST['tanggal'];
    $umur = $_POST['umur'];

    $sql = "INSERT INTO data (nama, alamat, suhu, tanggal, umur) 
            VALUES ('$nama', '$alamat', '$suhu', '$tanggal', '$umur')";
    $res = mysqli_query($koneksi, $sql);
    $count = mysqli_affected_rows($koneksi);

    if($count == 1){
        header("location: index.php");
    }
    else{
        header("location: tambah.php");
    }
}
else{
    header("location: tambah.php");
}
?>