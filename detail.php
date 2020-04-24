<?php 
include '../asset/header.php';
include '../koneksi.php';

$id_data = $_GET['id_data'];
$sql = mysqli_query($koneksi,"SELECT * FROM data WHERE id_data='$id_data'");
$detail = mysqli_fetch_assoc($sql);
?>

<div class="container">
    <div class="row mt-4">
        <div class="col md-7">
            <h2>Detail Data</h2>
            <hr class="bg-light">
                <table class="table table-bordered">
                    <tr>
                        <td><strong>Nama</strong></td>
                        <td><?= $detail['nama'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Alamat</strong></td>
                        <td><?= $detail['alamat'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Suhu</strong></td>
                        <td><?= $detail['suhu'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Tanggal</strong></td>
                        <td><?= $detail['tanggal'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Umur</strong></td>
                        <td><?= $detail['umur'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-right" colspan="2">
                            <a href="index.php" class="btn btn-success">
                                <i class=" fa fa-angle-double-left"></i>Kembali
                            </a>
                        </td>
                    </tr>
                </table>
        </div>
    </div>
</div>

<?php
include '../asset/footer.php';
?>