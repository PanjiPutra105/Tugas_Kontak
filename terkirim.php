<?php  
include'koneksi_kontak.php';
$nama= $_POST['nama'];
$email= $_POST['email'];
$umur= $_POST['umur'];
$kategori= $_POST['kategori'];
$pesan= $_POST['pesan'];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>terkirim</title>
 	<link rel="stylesheet" type="text/css" href="csskontak.css">
 </head>
 <body>
 	<center>Terimakasih Telah Menguhubungi Kami</center>
 <section class="base">
 	<center>
 		<h1>Terkirim</h1>
 	</center>
 	<ul type="square">
 	<li>Pesan</li>
 	<?php echo $_POST['nama'];?>
 	<li>Email</li>
 	<?php echo $_POST['email'];?>
 	<li>umur</li>
 	<?php echo $_POST['umur'];?>
 	<li>Kategori</li>
 	<?php echo $_POST['kategori'];?>
 	<li>Pesan</li>
 	<?php echo $_POST['pesan'];?>

</section>
 </body>
 </html>