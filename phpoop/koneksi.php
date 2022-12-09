<?php 
class dbh{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "dbmaribaca02";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from buku");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	function tambah_data($judul,$penerbit,$tanggal,$id)
	{
		mysqli_query($this->koneksi,"insert into buku values ('$judul','$penerbit','$tanggal','$id')");
	}

	function get_by_id($id)
	{
		$query = mysqli_query($this->koneksi,"select * from buku where id='$id'");
		return $query->fetch_array();
	}
	function update_data($judul,$penerbit,$tanggal,$id)
	{
		$query = mysqli_query($this->koneksi,"update buku set judul='$judul',penerbit='$penerbit',tanggal='$tanggal' where id='$id'");
	}
	function delete_data($id)
	{
		$query = mysqli_query($this->koneksi,"delete from buku where id='$id'");
	}
}