<?php
    require_once("db.php");
?>

<table border="1" align="center">
	<tr>
		<th>NIM</th>
		<th>Nama</th>
		<th>Tanggal</th>
		<th>Keterangan</th>
	</tr>
	<body>
		<?php
		$sql = "SELECT * FROM mahasiswa";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				?>
				<tr>
					<td><?php echo $row['nim']?></td>
					<td><?php echo $row['nama']?></td>
					<td><?php echo $row['tgl_lahir']?></td>
					<td><a href="delete.php?id=<?php echo $row['id']?>">Hapus</a> | <a href="formupdate.php?id=<?php echo $row['id']?>">Update</a></td>
					</tr>
				<?php
			}
		}else {
			echo "Tidak Ada Data Tersedia";
		}
			mysqli_close($conn);
		?>
	</body>
</table>
