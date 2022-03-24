<?php 
require 'function.php';

$tgl = $_GET['tgl'];
$result = lihat_transaksi_harian("SELECT a.id_produk AS ID, a.nama_produk AS NAMA, 
                                b.qty AS QTY, a.harga_jual AS JUAL, a.hpp AS BELI, 
                                SUM(a.harga_jual - a.hpp) AS LABA, SUM(b.qty * a.harga_jual) AS TOTAL 
                                FROM produk a JOIN transaksi b ON a.`id_produk`=b.`id_produk` 
                                WHERE b.tanggal='$tgl' GROUP BY a.id_produk 
                                ");


if (isset( $_POST['cari_produk']) ) {
    $idProduk = $_GET['id'];
    header('Location: searchProduk.php?tgl='.$tgl.'');

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
                <td><input type="text" name="tgl" value="<?php echo $tgl; ?>" readonly></td>
            </tr>
            <tr>
                <td>ID Produk</td>
                <td>:</td>
                <td><input type="text" name="id_produk" autocomplete="off"></td>
                <td><button type="submit" name="cari_produk">Cari Produk Disini</button></td>
            </tr>
        </Table>
    </form>
    <hr>

    <table border="2">
        <tr>
            <td>No</td>
            <td>Id Produk</td>
            <td>Nama Produk</td>
            <td>Qty Beli</td>
            <td>Harga Jual</td>
            <td>Harga Beli</td>
            <td>Laba</td>
            <td>Total Transaksi</td>
        </tr>
            <?php $no = 1; ?>
            <?php foreach ($result as $row) { ?>
        <tr>
                <td><?= $no; ?></td>
                <td><?= $row["ID"]; ?></td>
                <td><?= $row["NAMA"]; ?></td>
                <td><?= $row["QTY"]; ?></td>
                <td><?= $row["JUAL"]; ?></td>
                <td><?= $row["BELI"]; ?></td>
                <td><?= $row["LABA"]; ?></td>
                <td><?= $row["TOTAL"]; ?></td>
        </tr>
        <?php $no++; ?>
        <?php }; ?>
    </table>


</body>
</html>

