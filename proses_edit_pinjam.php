<?php
require_once "koneksi.php";


$anggota	= $_POST['anggota'];
$buku		= $_POST['buku'];
$tgl = date('Y-m-d');

$conn   = mysqli_connect('localhost','root','','perpus');
$query = mysqli_query($conn,"UPDATE meminjam SET tgl_pinjam		='$tgl',
										id_anggota			='$anggota',
										kd_buku				='$buku'
										where id_pinjam	='$_GET[id]'");
if ($query) {
echo "<script>alert('data berhasil disimpan');
document.location.href='pinjam.php'</script>\n";
} else {
echo "<script>alert('data gagal disimpan');
document.location.href='pinjam.php'</script>\n";
}
?>