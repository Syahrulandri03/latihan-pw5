<?php 
		
		$conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke db gagal");
				mysqli_select_db($conn, "pw_163040019") or die ("database salah");

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
			<?php 
					
					$results = mysqli_query($conn, "SELECT * FROM mahasiswa");
					while ($data = mysqli_fetch_assoc($results)){

			 ?>
		<div class="content">
			<div class="gambar"><img src="img/<?= $data['gambar'] ?>"></div>
			<div class="desc">
				<p class="nama"><a href="profil.php?img=<?= $data['gambar'] ?>&nama=<?= $data['nama'] ?>&email=<?= $data['email'] ?>&jurusan=<?= $data['jurusan'] ?>&universitas=<?= $data['universitas'] ?>" ><?php echo $data['nama'] ?></a></p>
				<p><?= $data['email'] ?></p>
			</div>
			<div class="clear"></div>
		</div>
		<?php } ?>
	</div>
</body>
</html>