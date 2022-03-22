<?php 
require 'function.php';
$idProduk = $_GET["id"];

if( hapusProduk($idProduk) > 0 ) {
    echo "
                <script>
                alert('data berhasil dihapus');
                document.location.href = 'viewproduk.php';
                </script>
        ";
} else {
    echo "<script>
        alert('data dibatalkan untuk dihapus');
        document.location.href = 'viewproduk.php';
        </script>
        ";
}


?>