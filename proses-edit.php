<?php
include '../koneksi.php';

$id_data = $_GET['id_data'];

if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $suhu = $_POST['suhu'];
    $tanggal = $_POST['tanggal'];
    $umur = $_POST['umur'];
    $sql = "UPDATE data SET nama = '$nama',
                               alamat = '$alamat',
                               suhu = '$suhu',
                               tanggal = '$tanggal',
                               umur = '$umur'
                               WHERE id_data = $id_data";
    $res = mysqli_query($koneksi,$sql);
    $count = mysqli_affected_rows($koneksi);

    if($count == 1){
        header("location: index.php");
    }
    else{
        header("location: edit.php");
    }
    // header ("location:index.php");
}

?>