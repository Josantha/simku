<html>
<head><title></title>
</head>
<body>
	<h2>Daftar Prodi Jurusan Teknologi Informasi</h2>
	<table border="1">
		<thead>
			<th>NO.</th>
			<th>Prodi</th>
			<th>Keterangan</th>
			<?php
				foreach ($Mahasiswa as $row){
					?>
		</thead>
		<tbody>
		<tr>
			<td>
				<?php
				echo "".$row['No'];
				?>
			</td>
			<td>
				<?php
    			echo "".$row['prodi'];
				?>
			</td>
			<td>
				<?php
    			echo "".$row['keterangan'];
				?>
			</td>
		</tr>
		<?php }?>
		</tbody>
</table>
</body>
</html>