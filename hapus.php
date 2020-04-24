<?php
include '../koneksi.php';
$id =$_GET['id'];
$query=mysql_query("DELETE FROM user WHERE id='$id'")or die(mysql_error());

if(! $query){
    die("Gagal menghapus date: " .mysqli_errno($koneksi). "-".mysqli_error($koneksi));
}
else{
    echo "<script>alert('Data berhasil dihapus.'); window.location='account.php'; </script>";
}
?>