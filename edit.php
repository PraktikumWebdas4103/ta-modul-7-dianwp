<?php
require_once('db.php');
$nim = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM maba WHERE nim = '$nim'");
$row = mysqli_fetch_array($sql);
if(isset($_POST['proses'])){
 $nama 				= $_POST["nama"];
 $nim				= $_POST["nim"];
 $jk				= $_POST["jk"];
 $prodi				= $_POST["prodi"];
 $fakultas			= $_POST["fakultas"];
 $asal 				= $_POST["asal"];
 $mottohidup		= $_POST["mottohidup"];
 $sql = "UPDATE mdata SET nim = '$nim', nama = '$nama', jk = '$jk', prodi = '$prodi', fakultas = '$fakultas', asal = '$asal', mottohidup = '$mottohidup' WHERE id='$id'";
 if (mysqli_query($conn, $sql)) {
 header('Location: lihatdata.php');
 }else {
 echo "Data gagal diupload! " . $sql . "<br?" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<!DOCTYPE html>

<html>

<head>

	<title></title>

</head>

<body>

		<h1>EDIT DATA</h1>

		<form method="POST">

			Nama : <input type="text" name="nama"  minlength="1" maxlength="25"  value="<?php echo $row["nama"];?>"><br><br>
			
			NIM : <input type="number"  name="nim" maxlength="10"  value="<?php echo $row["nim"];?>"  required ><br><br>

			Jenis Kelamin :	<input type="radio" name="jk" value="Perempuan" required>Perempuan 

					 		<input type="radio" name="jk" value="Laki - Laki" required>Laki - Laki

					 		<br><br>

			Program Studi :

					<select name="prodi">

						<option>Teknik Industri</option>

						<option>Fashion Design</option>

						<option>Akuntansi</option>

						<option>MBTI</option>		

						<option>D3 Sistem Informasi</option>		

						<option>Ilmu Komunikasi</option>

						<option>Adminitrasi Bisnis</option>

					</select><br><br>

			Fakultas :

					<select name="fakultas">
					    <option>Fakultas Informatika</option>

						<option>Fakutas Industri Kreatif</option>

						<option>Fakultas Teknik Elektro</option>

						<option>Fakultas Rekayasa Industri</option>

						<option>Fakultas Komunikasi Bisnis</option>	

						<option>Fakultas Ekonomi Bisnis</option>

						<option>Fakultas Ilmu Terapan</option>

					</select><br><br>

			Asal : <input type="text" name="asal" value="<?php echo $row["asal"];?>"><br><br>

			Motto Hidup : <input type="textarea" name="mottohidup" value="<?php echo $row["mottohidup"];?>"><br><br>

			<input type="submit" name="upload" id="upload" value="Kirim" style="width: 120px"></td>

			

	</form>

</body>

</html>