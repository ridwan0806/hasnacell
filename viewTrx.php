<?php 
require 'function.php';

$result = summaryTrx("SELECT tanggal AS TGL,SUM(qty) AS QTY,SUM(tot_trx) AS SETORAN,SUM(qty * tot_hpp) AS MODAL, SUM(qty * tot_laba) AS LABA
FROM transaksi GROUP BY tanggal DESC;");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data Transaksi</title>
</head>
<body>
    <h2>Daftar Setoran Transaksi</h2>
    <a href="addTrx.php">Input Transaksi</a>
    <br></br>
    <table border="2">
        <tr>
            <td>No</td>
            <td>Tanggal</td>
            <td>Jumlah Unit Trx</td>
            <td>Jumlah Setoran</td>
            <td>Modal Setoran</td>
            <td>Laba Setoran</td>
        </tr>
        <?php $no=1; ?>
        <?php foreach ($result as $row){ ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $row["TGL"]; ?></td>
            <td><?= $row["QTY"]; ?></td>
            <td><?= $row["SETORAN"]; ?></td>
            <td><?= $row["MODAL"]; ?></td>
            <td><?= $row["LABA"]; ?></td>            
        </tr>
        <?php $no++; ?>
        <?php }; ?>
    </table>
</body>
</html>