<?php 
$servername = 'localhost';
$username	= 'root';
$password	= '';
$database	= 'perpus';

$conn = mysqli_connect('localhost','root','','perpus');
if(!$conn){
	die("Koneksi gagal: ".mysqli_error());
}
echo "Koneksi berhasil";
mysqli_close($conn);
