<?php 
//koneksi ke database
$conn = mysqli_connect("localhost","root","","tugasinput");

function query($query){
	global $conn;
	$result = mysqli_query ($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data){
	global $conn;

	$nama = htmlspecialchars($data["nama"]);
	$nim = htmlspecialchars($data["nim"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	
	//upload gambar
	$gambar = upload();
	// var_dump($gambar);
	// die();
	if(!$gambar){
		return false;
	}

	$query = "INSERT INTO mahasiswa
				VALUES
				('', '$nama', '$nim', '$email', '$jurusan', '$gambar')

				";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function hapus($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM mahasiswa WHERE id = $id");
	return mysqli_affected_rows($conn);
}
function ubah($data){
global $conn;
	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$nim = htmlspecialchars($data["nim"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambar = htmlspecialchars($data["gambar"]);

	$query = " UPDATE mahasiswa SET 
				nim = '$nim', 
				nama = '$nama',
				email = '$email',
				jurusan = '$jurusan',
				gambar = '$gambar'
				WHERE id = $id
				";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
	}

function cari($keyword){
	$query = "SELECT * FROM mahasiswa
				WHERE
				nama LIKE '%$keyword%' OR
				nim LIKE '%$keyword%' OR
				email LIKE '%$keyword%' OR
				jurusan LIKE '%$keyword%'
				";
	return query($query);
}	
function upload (){
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	//cek apakah tidak ada gambar yang diupload
	if($error === 4){
	echo "<script>
		alert('Pilih Gambar Terlebih Dahulu');
		</script>";
		return false;
	}
	// cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
		echo "<script>
			alert('Yang Anda Upload Bukan Gambar');
			</script>";
	return false;
	}

	// echo $ukuranFile;
	// print_r($_FILES['gambar']);
	// die();
	//cek jika ukurannya terlalu besar 
	if( $ukuranFile > 10000000){
		echo "<script>
			alert('Ukuran Gambar Terlalu Besar');
			</script>";
	return false;
	} 

	//lolos pengecekan, gambar siap upload
	move_uploaded_file($tmpName, 'img/' . $namaFile);
	return $namaFile;
}
 ?> 