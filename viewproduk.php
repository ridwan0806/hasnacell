 
<?php
include ('function.php');
$produk = new Abdancell();
$show = $produk->lihat_produk();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>halaman produk</title>
</head>
<body>
	<table border="1">
		<tr>
			<td>No</td>
			<td>ID Produk</td>
			<td>Nama Produk</td>
			<td>Kategori</td>
			<td>Branch</td>
			<td>HPP</td>
			<td>Harga Jual</td>
			<td>Stok</td>
			<td>Edit</td>
			<td>Hapus</td>
		</tr>
		<tr>
			<?php
				$no = 1;
				foreach($show as $row){
			?>
			<td><?php echo $no++; ?></td>
			<td><?php echo $row['id_produk']; ?></td>
			<td><?php echo $row['nama_produk']; ?></td>
			<td><?php echo $row['kategori']; ?></td>
			<td><?php echo $row['brand']; ?></td>
			<td><?php echo $row['hpp']; ?></td>
			<td><?php echo $row['harga_jual']; ?></td>
			<td><?php echo $row['stok']; ?></td>
			<td><a href="edit_produk.php?id=<?php echo $row['id_produk']; ?>">edit</td>
			<td><a href="produk.php?action=deleteproduk&id=<?php echo $row['id_produk']; ?>">hapus</td>
		</tr>
			<?php
		}
			?>
	</table>
	<br>
<a href="tambah_produk.php">Tambah Produk</a>
</body>
</html>