<?php 
$conn = mysqli_connect("localhost","root","","counter");

function lihat_produk($query){
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;

}



function tambahProduk($data) {
	global $conn;

	$idProduk = htmlspecialchars($data["id_produk"]);
    $namaProduk = htmlspecialchars($data["nama_produk"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $brand = htmlspecialchars($data["brand"]);
    $hpp = htmlspecialchars($data["hpp"]);
    $hargaJual = htmlspecialchars($data["harga_jual"]);
    $stok = htmlspecialchars($data["stok"]);

	$query = "INSERT INTO produk VALUES('$idProduk','$namaProduk','$kategori','$brand','$hpp','$hargaJual','$stok')";
    mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}



function hapusProduk($idProduk) {
	global $conn;

	mysqli_query($conn,"DELETE FROM produk WHERE id_produk='$idProduk' ");

	return mysqli_affected_rows($conn);
}

function editProduk($data){

	global $conn;

	$idProduk = $data["id_produk"];
    $namaProduk = htmlspecialchars($data["nama_produk"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $brand = htmlspecialchars($data["brand"]);
    $hpp = htmlspecialchars($data["hpp"]);
    $hargaJual = htmlspecialchars($data["harga_jual"]);
    $stok = htmlspecialchars($data["stok"]);

	$query = "UPDATE produk SET nama_produk='$namaProduk',
								kategori='$kategori',
								brand='$brand',
								hpp='$hpp',
								harga_jual='$hargaJual',
								stok='$stok'
								WHERE id_produk='$idProduk'
								";
    mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}






?>