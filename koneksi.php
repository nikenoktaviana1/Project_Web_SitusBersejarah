<?php
	$konek = new mysqli('localhost','root','','data');
	if($konek->connect_error){
		die ('Maaf koneksi gagal:' .$connection->connect_error);}
?>