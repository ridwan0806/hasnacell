<?php 
require 'function.php';

if (isset($_POST["submit"]) ) {

    if(tambahProduk($_POST) > 0 ) {
        echo "
                <script>
                alert('data berhasil ditambah');
                document.location.href = 'viewproduk.php';
                </script>
        ";
    } else {
        echo "<script>
        alert('data gagal ditambah');
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
    <title>Tambah Data Produk</title>
</head>
<body>
    <h2>Tambah Data Produk</h2>

    <form action="" method="post">
        <table>
            <tr>
                <td>ID Produk</td>
                <td>:</td>
                <td><input type="text" name="id_produk" autocomplete="off" required></td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td>:</td>
                <td><input type="text" name="nama_produk" autocomplete="off" required></td>
            </tr>
            <tr>
                <td>Kategori Produk</td>
                <td>:</td>
                <td><input type="text" name="kategori" autocomplete="off" required></td>
            </tr>
            <tr>
                <td>Brand / Merk</td>
                <td>:</td>
                <td><input type="text" name="brand" autocomplete="off" required></td>
            </tr>
            <tr>
                <td>Harga Pokok</td>
                <td>:</td>
                <td><input type="text" name="hpp" autocomplete="off" required></td>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td>:</td>
                <td><input type="text" name="harga_jual" autocomplete="off" required></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>:</td>
                <td><input type="text" name="stok" autocomplete="off" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" name="submit">Simpan</button></td>
            </tr>

        </table>

    </form>

</body>
</html>