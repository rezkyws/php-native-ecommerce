<?php
session_start();
$i =1;
while (isset($_SESSION['id'][$i]))
{
	$i = $i +1;
}
$_SESSION['id'][$i] = $_POST['id'];
$_SESSION['idpembeli'][$i] = $_POST['idpembeli'];
$_SESSION['namabarang'][$i] = $_POST['nama'];
$_SESSION['hargabarang'][$i] = $_POST['harga'];
$_SESSION['jumlahbarang'][$i] = $_POST['jumlahbarang'];
	
?>

<html>
<body>
"<script>alert('Berhasil ditambahkan kedalam keranjang!');document.location="template.php?content=<?php echo 'data_barang.php'?>"</script>";
</body>
</html>
