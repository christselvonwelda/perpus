<?php
require_once "koneksi.php";

$id	= $_GET['id'];

$conn   = mysqli_connect('localhost','root','','perpus');
$query = mysqli_query($conn,"delete from buku where kd_buku='$id'");
if ($query) {
echo "<script>alert('data berhasil dihapus');
document.location.href='buku.php'</script>\n";
} else {
echo "<script>alert('data gagal dihapus');
document.location.href='buku.php'</script>\n";
}
?>