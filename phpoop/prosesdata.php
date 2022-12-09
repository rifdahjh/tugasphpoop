<?php 
include('koneksi.php');
$koneksi = new dbh();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['judul'],$_POST['penerbit'],$_POST['tanggal'],$_POST['id']);
	header('location:crud.php');
}
elseif($action=="update")
{
	$koneksi->update_data($_POST['judul'],$_POST['penerbit'],$_POST['tanggal'],$_POST['id']);
	header('location:crud.php');
}
elseif($action=="delete")
{
	$id = $_GET['id'];
	$koneksi->delete_data($id);
	header('location:crud.php');
}
?>