<?php 
require 'function.php';
$idProduk = $_GET["id"];

$produk = lihat_produk("SELECT * FROM produk WHERE id_produk='$idProduk' ")[0];         // [0] adalah mksd dari $rows[];
// var_dump($produk[0]["nama_produk"]);

if (isset($_POST["submit"]) ) {

    if(editProduk($_POST) > 0 ) {
        echo "
                <script>
                alert('data berhasil diupdate');
                document.location.href = 'viewproduk.php';
                </script>
        ";
    } else {
        echo "<script>
        alert('data gagal diupdate');
        document.location.href = 'viewproduk.php';
        </script>
        ";
    } 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Produk</title>
</head>
<body>
    <h2>Updtate Data Produk</h2>

    <form action="" method="post">
        <table>
            <tr>
                <td>ID Produk</td>
                <td>:</td>
                <td><input type="text" name="id_produk" autocomplete="off" required readonly value="<?php echo $produk["id_produk"]; ?>"></td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td>:</td>
                <td><input type="text" name="nama_produk" autocomplete="off" required value="<?php echo $produk["nama_produk"]; ?>"></td>
            </tr>
            <tr>
                <td>Kategori Produk</td>
                <td>:</td>
                <td><input type="text" name="kategori" autocomplete="off" required value="<?php echo $produk["kategori"]; ?>"></td>
            </tr>
            <tr>
                <td>Brand / Merk</td>
                <td>:</td>
                <td><input type="text" name="brand" autocomplete="off" required value="<?php echo $produk["brand"]; ?>"></td>
            </tr>
            <tr>
                <td>Harga Pokok</td>
                <td>:</td>
                <td><input type="text" name="hpp" autocomplete="off" required value="<?php echo $produk["hpp"]; ?>"></td>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td>:</td>
                <td><input type="text" name="harga_jual" autocomplete="off" required value="<?php echo $produk["harga_jual"]; ?>"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>:</td>
                <td><input type="text" name="stok" autocomplete="off" required value="<?php echo $produk["stok"]; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="submit">Update Produk</button></td>
            </tr>

        </table>

    </form>

</body>
</html>