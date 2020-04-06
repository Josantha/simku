<html>
<head>
	<title>Tugas</title>
</head>
<body>
<!--Nama:<?php echo $nama;?>
<br/>
Prodi:<?php echo $prodi;?>
<br/>-->
	<h2>Jurusan Teknologi Informasi</h2>
	<table border="1">
		<thead>
			<th>Nama</th>
			<th>Prodi</th>
			<?php
				foreach ($Mahasiswa as $row){
					?>
		</thead>
		<tbody>
		<tr>
			<td>
				<?php
				echo "".$row['nama'];
				?>
			</td>
			<td>
				<?php
    			echo "".$row['prodi'];
				?>
			</td>
		</tr>
		<?php }?>
		</tbody>
</table>
</body>
</html>