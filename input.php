<!DOCTYPE html>
<html>
<head>
	<title>jurnal7</title>
</head>
<body>
<table>
	<h2>FORM INPUT DATA MAHASISWA</h2>
	<form method="POST" action="tabel.php">
		<tr>
			<td>Nama: </td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>NIM: </td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Tanggal Lahir: </td>
			<td><input type="date" name="tgl"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin: </td>
			<td><select name="jk">
				<option>Pria</option>
				<option>Wanita</option>
			</select></td>
		</tr>
		<tr>
			<td>Program Studi: </td>
			<td><select name="prodi">
				<option>Manajemen Informatika</option>
				<option>D3-Sistem Informasi</option>
			</select></td>
		</tr>
		<tr>
			<td>Fakultas: </td>
			<td><input type="radio" name="fk" value="FIK">FIK
			<input type="radio" name="fk" value="FRI">FRI
			<input type="radio" name="fk" value="FIT">FIT</td>
		</tr>
		<tr>
			<td>Asal: </td>
			<td><input type="text" name="asal"></td>
		</tr>
		<tr>
			<td>Motto Hidup: </td>
			<td><input type="text area" name="motto"></td>
		</tr>
		<tr>
			<td><input type="submit" name="kirim" value="Submit"></td>
		</tr>
		<br>
	</form>
</table>
</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","","bd_jurnal7");
if(isset($_POST['kirim'])){
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$tgl = $_POST['tgl'];
	$jk = $_POST['jk'];
	$prodi = $_POST['prodi'];
	$fk = $_POST['fk'];
	$asal = $_POST['asal'];
	$motto = $_POST['motto'];

	$query = "INSERT INTO tb_jurnal7(Nama,NIM,Tgl_lahir,JK,Prodi,Fk,Asal,Motto) VALUES('$nama','$nim','$tgl','$jk','$prodi','$fk','$asal','$motto')";
	
	if(mysqli_query($conn,$query)){
 	echo "<br> Successfull...";
 	}else{
 	echo "<br> Failed!!!";
 }

 }
 

 ?>
