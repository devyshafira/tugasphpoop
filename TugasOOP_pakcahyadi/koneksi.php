<?php 
class dbh{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "novel";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from buku_cerita");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	function tambah_data($id,$judul,$author,$chapter)
	{
		mysqli_query($this->koneksi,"insert into buku_cerita values ('$id','$judul','$author','$chapter')");
	}

	function get_by_id($id)
	{
		$query = mysqli_query($this->koneksi,"select * from buku_cerita where id='$id'");
		return $query->fetch_array();
	}
	function update_data($judul,$author,$chapter,$id)
	{
		$query = mysqli_query($this->koneksi,"update buku_cerita set judul='$judul',author='$author',chapter='$chapter' where id='$id'");
	}
	function delete_data($id)
	{
		$query = mysqli_query($this->koneksi,"delete from buku_cerita where id='$id'");
	}
}