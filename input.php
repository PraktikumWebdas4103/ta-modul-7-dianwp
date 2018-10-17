<!DOCTYPE html>

<html>

<head>

	<title></title>

</head>

<body>

		<h1>Input Mahasiswa Baru</h1>

		<form  action="prosesinput.php" method="POST" enctype="multipart/form-data">

			Nama : <input type="text" name="nama"  minlength="1" maxlength="25" ><br><br>
			
			NIM : <input type="number"  name="nim" maxlength="10"  required ><br><br>

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


			Asal : <input type="text" name="asal"><br><br>

			Motto Hidup : <input type="textarea" name="mottohidup"><br><br>

			<input type="submit" name="upload" id="upload" value="Kirim" style="width: 120px"></td>

			

	</form>

</body>

</html>