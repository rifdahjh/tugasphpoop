<?php 	
include('koneksi.php');
$db = new dbh();
$id_user = $_GET['id'];
if(! is_null($id_user))
{
	$data_user = $db->get_by_id($id_user);
}
else
{
	header('location:crud.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Update Data User</h3>
<hr/>
<form method="post" action="prosesdata.php?action=update">
<input type="hidden" name="id" value="<?php echo $data_user['id']; ?>"/>
<table>
	<tr>
		<td>Judul</td>
		<td>:</td>
		<td><input type="text" name="judul" value="<?php echo $data_user['judul']; ?>"/></td>
	</tr>
	<tr>
		<td>Penerbit</td>
		<td>:</td>
		<td><input type="text" name="penerbit" value="<?php echo $data_user['penerbit']; ?>"/></td>
	</tr>
	<tr>
		<td>Tanggal</td>
		<td>:</td>
		<td><input type="text" name="tanggal" value="<?php echo $data_user['tanggal']; ?>"/></td>
	</tr>
    <tr>
		<td>Id</td>
		<td>:</td>
		<td><input type="text" name="id" value="<?php echo $data_user['id']; ?>"/></td>
	</tr>
    <tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Simpan"/></td>
	</tr>
</table>
</form>
</body>
</html>