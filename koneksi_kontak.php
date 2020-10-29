<?php

$host ="localhost";

$user ="root";

$pass ="";

$nama_DB="kontak";

$koneksi=mysqli_connect($host,$user,$pass,$nama_DB);

if (!$koneksi) {

	die ("Koneksi dengan datbase gagal:".mysql_connect_error());

}

?>