<?php 
require 'function.php';

$tgl = $_GET['tgl'];
$idProduk = $_GET['id'];

$produk = lihat_produk("SELECT * FROM produk WHERE id_produk='$idProduk' ")[0];

if (isset( $_POST['submit']) ) {
    
    if(tambahDataTransaksi($_POST) > 0 ) {
        echo "
                <script>
                alert('Transaksi Berhasil Di Input !');
                </script>
        ";
        header('Location: detailTrx.php?tgl='.$tgl.'');
    }
    

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Detail Transaksi</title>
</head>
<body>
    <h2>Insert Detail Produk Dijual</h2>

    <form action="" method="post">
        <Table>
            <tr>
                <td>Tanggal Trx</td>
                <td>:</td>
                <td><input type="text" name="tanggal" value="<?php echo $tgl; ?>" readonly></td>
            </tr>
            <tr>
                <td>ID Produk</td>
                <td>:</td>
                <td><input type="text" name="id_produk" autocomplete="off" value="<?php echo $produk["id_produk"]; ?>"></td>
                <!-- <td><button type="submit" name="cari_produk">Cari Produk Disini</button></td> -->
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td>:</td>
                <td><input type="text" name="nama_produk" autocomplete="off" value="<?php echo $produk["nama_produk"]; ?>"></td>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td>:</td>
                <td><input type="text" name="harga_jual" autocomplete="off" id="hargaJual" value="<?php echo $produk["harga_jual"]; ?>"></td>
            </tr>
            <tr>
                <td>Harga Modal</td>
                <td>:</td>
                <td><input type="text" name="hpp" id="modal" autocomplete="off" value="<?php echo $produk["hpp"]; ?>"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>:</td>
                <td><input type="text" name="qty" id="qty" autofocus required></td>
            </tr>
            <tr>
                <td>Total HPP</td>
                <td>:</td>
                <td><input type="text" name="tot_hpp" id="hpp" ></td>
            </tr>
            <tr>
                <td>Total Laba</td>
                <td>:</td>
                <td><input type="text" name="tot_laba" id="laba" autocomplete="off"></td>
            </tr>
            <tr>
                <td>Total Beli</td>
                <td>:</td>
                <td><input type="text" name="tot_trx" id="totalTransaksi" autocomplete="off"></td>
            </tr>
            <tr>
                <td></td>
                <td>:</td>
                <td><button type="submit" name="submit">Simpan</button> || <button type="submit" name="cancel">Batalkan</button></td>
                
            </tr>
        </Table>
    </form>

<script src="script1.js"></script>
</body>
</html>

