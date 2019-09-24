<?php 
		
		require 'php/functions.php';
		$mahasiswa = query("SELECT * FROM mahasiswa");


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Daftar Mahasiswa</title>
	<link rel="stylesheet" href="css/latihan2.css">
</head>
<body>
		<div class="header">
			<p>Daftar Mahasiswa</p>
		</div>

	<div class="container">
			
			 <?php foreach ($mahasiswa as $mhs) : ?>
		<div class="content">
			<div class="gambar">
				<img src="img/<?= $mhs['gambar'] ?>">
			</div>
			<div class="desc">
				<p class="nama"><?= $mhs['gambar'] ?></p>
				<p><?= $mhs['email'] ?></p>
				<p><?= $mhs['jurusan'] ?></p>
				<p><?= $mhs['universitas'] ?></p>
			</div>

			<?php endforeach; ?>
	<div class="clear"></div>
		</div>
		
	</div>
</body>
</html>