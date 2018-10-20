<form action="" method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Nama Mahasiswa</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>nim</td>
			<td>:</td>
			<td><input type="number" name="nim"></td>
		</tr>
		<tr>
			
		<td><input type="radio" name="jk" value="laki-laki" checked>Laki-laki<br></td>
  		<td><input type="radio" name="jk" value="perempuan">Perempuan<br></td>
	
		</tr>
		 <tr>
        <td>Fakultas :</td>
        <td><select name="fakultas" required>
            <option value="fit">FAKULTAS ILMU TERAPAN</option>
            <option value="fik">FAKULTAS INDUSTRI KREATIF</option>
            <option value="feb">FAKULTAS EKONOMI BISNIS</option>
            <option value="fkb">FAKULTAS KOMUNIKASI BISNIS</option>
        </td>
		</tr>
		<tr>
		<td><select name="prodi" required>
 			<option value="mi">D3 Manajemen Informatika</option>
  			<option value="mp">D3 Manajemen Pemasaran</option>
  			<option value="perhotelan">D3 Perhotelan</option>
  			<option value="tektel">D3 Teknik Telekomunikasi</option>
  			<option value="ka">D3 Komputerisasi Akutansi</option>
  			<option value="if">D3 Teknik Informatika</option>
  			<option value="ilkom">S1 Ilmu Komunikasi</option>
  			<option value="mbti">S1 Manajemen Bisnis Telekomunikasi Informatika</option>
			<option value="dkv">S1 Desain Komunikasi Visual</option>
			<option value="di">S1 Design Interior</option>
			<option value="sisfo">S1 Sistem Informasi</option>
			</select>
		</td>
		</tr>
		<tr>
			<td>asal</td>
			<td>:</td>
			<td><textarea name="asal"></textarea></td>
		</tr>
		<tr>
			<td>MOTO HIDUP</td>
			<td>:</td>
			<td><textarea name="motohidup"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="simpan"></td>
		</tr>
	</table>
</form>

<?php
	if (isset($_POST['simpan'])) {
		include 'koneksi.php';
		if ($koneksi) {
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$jk = $_POST['jk'];
		$fakultas=$_POST['fakultas'];
		$prodi = $_POST['prodi'];
		$asal = $_POST['asal'];
		$motohidup = $_POST['motohidup'];
		
			$query = mysqli_query($koneksi, "INSERT INTO db_mahasiswa VALUES ('$nama','$nim','$jk','$fakultas','$prodi','$asal','$motohidup')");
		if ($query) {
	echo "Berhasil";
		}else{
			echo "Gagal";
		}
			
			
		}
	}
?>