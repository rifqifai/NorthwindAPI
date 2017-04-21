<html>
<head>
<title>Eko Wijayanto</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
</html>
<body>
<div id="content">
	<div id="header">
		<h1>PT. NORTHWIND</h1>
	</div>
		<?php include("navbar.php"); ?>
	<div id="isi">
	<p>Data telah diupdate . Tunggu beberapa detik !</p>
	<?php
	include("koneksi.php");
	$Nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$Jurusan = $_POST['jurusan'];
	$JenisKelamin = $_POST['JK'];
	$Komentar= $_POST['komentar'];
	$query = mysql_query("update mahasiswa set nama='$Nama', jurusan='$Jurusan', JK='$JenisKelamin',komentar='$Komentar' where nim='$nim'");
	header("Refresh: 3; url=Komentar.php");
	?>
	</div>
	
	<?php include("footer.php"); ?>	
</div>

</body>
</html>