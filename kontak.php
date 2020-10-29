<?php
include('koneksi_kontak.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>KIRIM PESAN</title>
	<link rel="stylesheet" type="text/css" href="csskontak.css">
</head>
<body>
	<center>
		<h1>Pesan</h1>
	</center>
	<form method="POST" action="terkirim.php ?>" enctype="multipart/form-data">
		<section class="base">
	<div>
	<label>Nama</label><br>
	<input type="text" name="nama" autofocus="" required="" />
</div>
<div>
	<label>Email</label><br>
	<input type="text" name="email" autocomplete=""required="" autocomplete="@gmail.com">
</div>
<div>
	<label>Umur</label><br>
	<select name="umur" size="" required="">
		<option value="">Pilih</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="custom">custom</option>	

	</select>
</div>
<div>
	<label>Kategori</label><br>
	<select name="kategori">
	<option value="alasan">Alasan Menghubungi kami</option>
	<option value="gabut">gabut</option>
	<option value="penting">Penting</option>
	<option value="test">Ngetest</option>
</select>
</div>
<div>
<label>Pesan</label><br>
<textarea name="pesan" cols="50" rows="10"></textarea>
</div>
<div>
<button type="sumbit">Kirim</button>
</div>
</section>
</form>
</body>
</html