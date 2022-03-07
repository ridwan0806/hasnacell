<?php 
	class Abdancell {
		var $host	= "localhost";
		var $user 	= "root";
		var $pass	= "";
		var $db		= "hasna_cell_3";
		var $conn	= "";

		public function __construct(){
			$this->conn = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
			if(mysqli_connect_errno()){
				echo "koneksi gagal" . mysqli_connect_errno;
			}
		}

		public function lihat_produk()
		{
			$sql = mysqli_query($this->conn,"select * from produk");
			while($row = mysqli_fetch_array($sql))
			{
				$result[] = $row;
			}
			return $result;
		}

		public function tambah_produk($kode_produk,$nama_produk,$kategori,$brand,$hpp,$harga_jual,$stok)
		{
			mysqli_query($this->conn,"insert into produk values('$kode_produk','$nama_produk','$kategori','$brand','$hpp','$harga_jual','$stok')");
		}

		public function get_kode_produk($kode_produk)
		{
			$sql = mysqli_query($this->conn,"select * from produk where kode_produk='$kode_produk'");
			return $sql->fetch_array();
		}

		public function edit_produk($nama_produk,$kategori,$brand,$hpp,$harga_jual,$stok,$kode_produk)
		{
			mysqli_query($this->conn,"update produk set nama_produk='$nama_produk',kategori='$kategori',
			brand='$brand',hpp='$hpp',harga_jual='$harga_jual',stok='$stok' where kode_produk='$kode_produk'
			");
		}

		public function hapus_produk($kode_produk)
		{
			mysqli_query($this->conn,"delete from produk where kode_produk='$kode_produk'");
		}

		// bagian transaksi..
		public function summary_trx()
		{
			$sql = mysqli_query($this->conn,"SELECT a.tanggal,
			SUM(a.`qty`) AS jml_produk_terjual,
			SUM(a.qty*b.harga_jual) AS setoran,
			SUM(a.`qty`*b.hpp) AS modal,
			SUM((a.`qty`*b.`harga_jual`)-a.`qty`*b.`hpp`) AS laba
			FROM transaksi a JOIN produk b
			ON a.`kode_produk`=b.`kode_produk`
			GROUP BY a.`tanggal`
			ORDER BY a.tanggal DESC
			");
			while($row = mysqli_fetch_array($sql))
			{
				$result[] = $row;
			}
			return $result;
		}
	}
?>