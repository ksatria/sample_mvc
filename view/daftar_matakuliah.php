<html>
	<head>
		<title>Web Matakuliah</title>
	</head>
	<body>
		<h1>Daftar Matakuliah</h1>
		<table>
			<tr>
				<th>No.</th><th>Kode</th><th>Nama</th><th>SKS</th>
			</tr>
			<?php
			$no = 1;
			while($mk = mysql_fetch_array($daftarMk)){
			?><tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $mk["kode_mk"]; ?></td>
				<td><?php echo $mk["nama_mk"]; ?></td>
				<td><?php echo $mk["sks"]; ?></td>
			</tr><?php
			}
			?>
		</table>
	</body>
</html>