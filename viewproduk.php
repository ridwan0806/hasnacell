 <?php 

require 'function.php';
$dataProduk = lihat_produk("SELECT * FROM produk");
 
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>halaman produk</title>
</head>
<body>
	<h3><a href="addProduk.php">Tambah Produk</a></h3>

	<table border="1">
		<tr>
			<td>No</td>
			<td>ID Produk</td>
			<td>Nama Produk</td>
			<td>Kategori</td>
			<td>Brand</td>
			<td>HPP</td>
			<td>Harga Jual</td>
			<td>Stok</td>
			<td>Edit</td>
			<td>Hapus</td>
		</tr>
 		<?php 
			$no = 1;
			foreach ($dataProduk as $row) {
		 ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $row["id_produk"]; ?></td>
			<td><?php echo $row["nama_produk"]; ?></td>
			<td><?php echo $row["kategori"]; ?></td>
			<td><?php echo $row["brand"]; ?></td>
			<td><?php echo $row["hpp"]; ?></td>
			<td><?php echo $row["harga_jual"]; ?></td>
			<td><?php echo $row["stok"]; ?></td>
			<td><a href=editProduk.php?id=<?php echo $row["id_produk"]; ?>>Edit</td>
			<td><a href="hapusProduk.php?id=<?php echo $row["id_produk"]; ?>" onclick="return confirm('Hapus Produk ini ?');">Hapus</td>
		</tr>
		<?php 
			$no++;
			}
		?>
	</table>

</body>
</html>