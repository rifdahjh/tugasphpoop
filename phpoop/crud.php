<?php 	
include('koneksi.php');
$db = new dbh();
$data = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="tambahdata.php">Tambah Data</a>
<table border="1">
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Penerbit</th>
			<th>Tanggal</th>
			<th>Id</th>
            <th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['judul']; ?></td>
				<td><?php echo $row['penerbit']; ?></td>
                <td><?php echo $row['tanggal']; ?></td>
                <td><?php echo $row['id']; ?></td>
				<td>
					<a href="editdata.php?id=<?php echo $row['id']; ?>">Update</a>
					<a href="prosesdata.php?action=delete&id=<?php echo $row['id']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>