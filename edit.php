<?php 	

include '../koneksi.php';
include 'proses-edit.php';
include '../asset/header.php';

$id_data = $_GET["id_data"];

$query = mysqli_query($koneksi, "SELECT * FROM data WHERE id_data = '$id_data'");

$data = mysqli_fetch_assoc($query);

?>

<div class="card">
  <div class="card-header">
  		<h2 class="card-title"> <i class="fas fa-edit"> </i> Edit Data ODP </h2>
  </div>

<center>
		<br/>

		<h3> EDIT DATA ODP</h3>

		<form action="" method="post">
			<table>
				<tr>
					<td>
	  					<div class="form-group">
	    					<label for="nama">Nama</label>
	    					<input type="text" class="form-control" name="nama" value="<?= $data['nama']; ?>" required>
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<label for="alamat">Alamat</label>
	    					<input type="text" class="form-control" name="alamat"  value="<?= $data['alamat']; ?>" required>
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<label for="suhu">Suhu</label>
	    					<input type="text" class="form-control" name="suhu"  value="<?= $data['suhu']; ?>" required>
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<label for="tanggal">Tanggal</label>
	    					<input type="date" class="form-control" name="tanggal"  value="<?= $data['tanggal']; ?>" required>
	  					</div>
	  				</td>
				</tr>

				<tr>
					<td>
	  					<div class="form-group">
	    					<label for="umur">Umur</label>
	    					<input type="int" class="form-control" name="umur"  value="<?= $data['umur']; ?>" required>
	  					</div>
	  				</td>
				</tr>
				<br>
				<tr>
					<td> <button type="submit" class="btn btn-primary" name="simpan"> EDIT </button> </td>
				</tr>
			</table>
		</form>
		<br>
		<br>
		<br>

	</center>



<?php 	

include '../asset/footer.php';

?>