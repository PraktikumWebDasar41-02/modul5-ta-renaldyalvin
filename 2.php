<?php
$konek = mysqli_connect("localhost", "root", "", "d_modul5");
if ($konek->connect_error) {
    die("Connection failed: " . $konek->connect_error);
}
session_start();
	$nim = $_SESSION['nimm'];
	$hasil = mysqli_query($konek, "SELECT * FROM t_jurnal1 WHERE nim = '$nim' ");
	$row = mysqli_fetch_array($hasil);
echo "Nama : ";
	printf("%s",$row['Nama']);
echo "<br>";
echo "Tanggal Lahir : ";
	printf("%s",$row['Tanggal']);
echo "<br>";
echo "Email : ";
	printf("%s",$row['Email']);
echo "<br>";
echo "Jenis Kelamin : ";
	printf("%s",$row['Jeniskelamin']);
echo "<br>";
echo "Program Studi : ";
	printf("%s",$row['Prodi']);
echo "<br>";
echo "Fakultas : ";
	printf("%s",$row['Fakultas']);
echo "<br><br>";
?>
	<a href="1.php">INPUTAN BARU</a>
