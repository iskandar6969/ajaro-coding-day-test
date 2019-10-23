<?php 


// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "databarang");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}

	return $rows;
}

function tambah($data) {
	// mengambil data dari tiap elemen pada form
	global $conn;

	$kode = htmlspecialchars($data["kode"]);
	$nama = htmlspecialchars($data["nama"]);
	$deskripsi = htmlspecialchars($data["deskripsi"]);
	$stok = htmlspecialchars($data["stok"]);
	$harga = htmlspecialchars($data["harga"]);
	$berat = htmlspecialchars($data["berat"]);

	// query insert data
	$query = "INSERT INTO barang VALUES ('', '$kode', '$nama', '$deskripsi', '$stok', '$harga', $berat )";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM barang WHERE id = $id");

	return mysqli_affected_rows($conn);
}


function ubah($data){
	global $conn;

	$id = $data["id"];
	$kode = htmlspecialchars($data["kode"]);
	$nama = htmlspecialchars($data["nama"]);
	$deskripsi = htmlspecialchars($data["deskripsi"]);
	$stok = htmlspecialchars($data["stok"]);
	$harga = htmlspecialchars($data["harga"]);
	$berat = htmlspecialchars($data["berat"]);

	// query insert data
	$query = "UPDATE barang SET 
				kode = '$kode',
				nama = '$nama',
				deskripsi = '$deskripsi',
				stok = '$stok',
				harga = $harga,
				berat = $berat
				WHERE id = $id
				";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}








 ?>