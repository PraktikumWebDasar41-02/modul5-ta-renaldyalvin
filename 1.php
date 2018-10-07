<?php
	$konek = mysqli_connect("localhost", "root", "", "d_modul5");
if ($konek->connect_error) {
    die("Connection failed: " . $konek->connect_error);
}
?>
<form method="post" action="">
	Nim : <input type="text" name="nim"><br>
	Nama : <input type="text" name="nama"><br>
	email :	<input type="text" name="email" placeholder="@email"><br>
	Tanggal Lahir : <input type="date" name="tgl"><br>
	Jenis Kelamin : <br>
					<input type="radio" name="jk" value="Laki-Laki"> Laki-Laki<br>
					<input type="radio" name="jk" value="Perempuan"> Perempuan
					<input type="radio" name="jk" value="null" checked hidden><br>
	Program Studi :
		<select name="prodi">
  			<option value="null">Pilih</option>
  			<option value="Manajemen Informatika">Manajemen Informatika</option>
  			<option value="Administrasi Bisnis">Administrasi Bisnis</option>
  			<option value="Ilmu komunikasi">Ilmu komunikasi</option>
  			<option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
			</select><br>
	Fakultas :
		<select name="fakultas">
  			<option value="null">Pilih</option>
  			<option value="FIT">FIT</option>
  			<option value="FEB">FEB</option>
  			<option value="FKB">FKB</option>
  			<option value="FIF">FIF</option>
		</select><br>
	<input type="submit" name="submit" value="Submit">
</form>
<?php
if (isset($_POST['submit'])) {
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$jk = $_POST['jk'];
	$prodi = $_POST['prodi'];
	$fakultas = $_POST['fakultas'];
	$tgl = $_POST['tgl'];

	if (!is_numeric($nim)) {
		echo "<br>";
		$nim_err = "f";
		echo "NIM Harus Angka";
	}else{
		$nim_err = "t";
	}
	if (strlen($nama)>=20) {
		echo "<br>";
		$nama_err = "f";
		echo "Nama Maksimal 20 Karakter";
	}else{
		$nama_err = "t";
	}
	if (is_numeric($nama)) {
		echo "<br>";
		$nama2_err = "f";
		echo "Nama harus huruf";
	}else{
		$nama2_err = "t";
	}
	if ($prodi == 'null') {
		echo "<br>";
		$prodi_err = "f";
		echo "Program Studi harus diisi";
	}else{
		$prodi_err = "t";
	}
	if ($fakultas == 'null') {
		echo "<br>";
		$fakultas_err = "f";
		echo "Fakultas harus diisi";
	}else{
		$fakultas_err = "t";
	}
	if ($jk == 'null') {
		echo "<br>";
		$jk_err = "f";
		echo "Pilihlah Jenis Kelamin";
	}else{
		$jk_err = "t";
	}

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo "<br>";
	$email_err = "t";
} else {
	$email_err = "f";
	echo "<br>";
 	 echo("$email tidak ditemukan");
	}


if ($nim_err == "t" && $nama_err == "t" && $email_err == "t" && $nama2_err == "t" && $prodi_err == "t" && $fakultas_err == "t" && $jk_err == "t") {
	session_start();
		$_SESSION['nimm'] = $nim;
		$_SESSION['namaa'] = $nama;
		$db = "INSERT INTO t_jurnal1 (Nim, Nama, Email, Tanggal, Jeniskelamin, Prodi, Fakultas)
			VALUES ('$nim', '$nama','$email', '$tgl', '$jk', '$prodi', '$fakultas')";


if ($konek->query($db) === TRUE) {
		echo "<br>";
    	echo "successfully";
    	header("Location: 2.php");
	} else {
		echo "<br>";
    	echo "Error: ". $db ."<br>". $konek->error;
	}
		}else{
  		echo "<script>
			alert('Login Gagal');
  			</script>";
			echo "<br>";
				echo "Failed";
	}
	$konek->close();
		}
?>
