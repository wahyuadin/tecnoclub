<?php


include('koneksi.php');

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$telp = $_POST['telp'];
$kelas = $_POST['kelas'];
$kategori = $_POST['kategori'];

//query

$query =  "INSERT INTO user(nama , nim , telp , kelas , kategori) VALUES('$nama' , '$nim' , '$telp' , '$kelas' , '$kategori')";

if (mysqli_query($conn , $query)) {
	# code redicet setelah insert ke index
	header("location:sukses.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>