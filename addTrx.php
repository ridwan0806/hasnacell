<?php

if (isset($_POST["submit"]) ) {
    
    $tgl = $_POST["tgl"];
    header('Location: detailTrx.php?tgl='.$tgl.'');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>
            <form action="" method="post">
                <label for="tanggal">Tanggal Transaksi :</label>
                <input type="text" name="tgl" id="tanggal" required>
                <button type="submit" name="submit">Insert Detail Transaksi</button>
            </form>
        </li>       
    </ul>
    
</body>
</html>