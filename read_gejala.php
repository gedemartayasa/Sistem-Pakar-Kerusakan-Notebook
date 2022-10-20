<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sistem Pakar</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<div class="container">
        <h3 class="title">Daftar Gejala</h3>
        <a class="button" href="index.php">Home</a>
		
		<table class="styled-table">
			<thead>
				<th>No</th>
				<th>Kode Gejala</th>
				<th>Gejala</th>
			</thead>
			<tbody>
				<?php
				include "koneksi.php";
				$no = 1;
				$sql = "SELECT * FROM tb_pertanyaan";
				$query = mysqli_query($connect,$sql);
				while($data = mysqli_fetch_array($query)){
				?>
				<tr>
				<td><?php echo "$no"; ?></td>
				<td><?php echo "$data[kode_pertanyaan]"; ?></td>
				<td><?php echo "$data[isi_pertanyaan]"; ?></td>
				</tr>
				<?php
					$no++;
				}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>