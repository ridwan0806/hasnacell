<?php 
require 'function.php';

$tgl = $_GET['tgl'];


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
</body>
</html>

