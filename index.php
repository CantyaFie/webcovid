<!DOCTYPE html>
<html>
    <head>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <title>LOG-IN</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<center><body>
<br><br><br><br><br><br>
    <div class="kotak_login">
	<p class="tulisan_login">W E L C O M E</p>
    <br/>
    <br/>
    <br/>
    <form method="post" action="cek-login.php">
        <label>Username</label>
		<input type="text" name="username" class="form_login" placeholder="username anda....">
        <label>Password</label>
		<input type="password" name="password" class="form_login" placeholder="password....">
		<input type="submit" class="tombol_login" value="LOGIN">

        <br/>
		<br/>
		<center>
			<a class="link" href="create.html">Create account</a>
		</center>
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "Login gagal! username atau password salah!";
        }else if($_GET['pesan'] == "login"){
            echo "<script>alert('You have successfully logged in'); window.location='index.php'; </script>";
        }
    }
    ?>
        </table>
    </form>
    </body>
</html>