<?php
include "../koneksi.php";

$username=$_POST["username"];
$password=($_POST["password"]); 

  $sql="insert into login (username,password) values
		('$username','$password')";

  $hasil=mysqli_query($koneksi,$sql);

  if ($hasil) {
	echo "<script>alert('successfully created an account'); window.location='index.php'; </script>";
	exit;
  }
else {
	echo "<script>alert('failed to create account'); window.location='index.php'; </script>";
	exit;
}  

?>