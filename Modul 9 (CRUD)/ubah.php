<?php 
require 'functions.php';

//ambil data di url
$id = $_GET["id"];
//query data mahasiswa berdasarkan id 
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id ")[0];
//cek tombol submit sudah ditekan?
if (isset($_POST["submit"])){
		//cek apakahh data berhasil diubah atau tidak
		if(ubah($_POST)>0){
			echo "
					<script>
						alert('Data Berhasil Diubah');
						document.location.href = 'index.php';
					</script>
				";
		}else{
			echo "
					<script>
						alert('Data Gagal Diubah');
						document.location.href = 'index.php';
					</script>
				";
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Data Mahasiswa</title>
</head>
<body>
	<h1>Update Data Mahasiswa</h1>
	<form action="" method="post"> 
		<input type="hidden" name="id" value="<?= $mhs["id"];?>">
		<ul>
			<li>
				<label for="nim">NIM : </label>
				<input type="text" name="nim" id="nim" required value="<?= $mhs["nim"];?>">
			</li>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" required value="<?= $mhs["nama"];?>">
			</li>
			<li>
				<label for="email">Email : </label>
				<input type="text" name="email" id="email"value="<?= $mhs["email"];?>">
			</li>
			<li>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan"value="<?= $mhs["jurusan"];?>">
			</li>
			<li>
				<label for="gambar">Gambar : </label>
				<input type="text" name="gambar" id="gambar"value="<?= $mhs["gambar"];?>">
			</li>
			<li>
				<button type="submit" name="submit">Update Data!</button>
			</li>
		</ul>
	</form>

</body>
</html> 