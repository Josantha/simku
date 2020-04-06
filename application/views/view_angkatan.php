<html>
<head><title></title>
</head>
<body>
	<h2>Daftar Angkatan Jurusan Teknologi Informasi</h2>
	<table border="1">
		<thead>
			<th>NO.</th>
			<th>Tahun</th>
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
    			echo "".$row['tahun'];
				?>
			</td>
		</tr>
		<?php }?>
		</tbody>
</table>
</body>
</html>