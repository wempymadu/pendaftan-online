<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>pendaftaran</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	

	<header>
		<h3>
			pendaftaran siswa baru di SMA 2 Langke Rembong
		</h3>
		<h1>SMA 2 RUTENG </h1>
	</header>
	
	<nav>
		<h4>MENU</h4>
		<ul>
			<li><a href="formdaftar.php">Daftar baru</a></li>
			<li><a href="list.php">pendaftaran</a></li>
		</ul>
	</nav>
	<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
</body>
</html>