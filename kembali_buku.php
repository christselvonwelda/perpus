<?php
require_once "koneksi.php";

$tgl = date('Y-m-d');

$conn   = mysqli_connect('localhost','root','','perpus');
$query = mysqli_query($conn,"UPDATE meminjam SET tgl_kembali		= '$tgl', kembali = '2'
										
										where id_pinjam	='$_GET[id]'");
if ($query) {
echo "<script>alert('Buku Sudah Dikembalikan');
document.location.href='pinjam.php'</script>\n";
} else {
echo "<script>alert('gagal');
document.location.href='pinjam.php'</script>\n";
}
?>