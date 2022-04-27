<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Proses Login Form</title>
</head>
<?php
if (isset($_POST['Login'])){
	$Nama = $_POST['Nama'];
	$Email = $_POST['Email'];

	//memasukkan nama & email

	if ($Nama=='Bunga Mawar' and $Email=='mawar123@gmail.com'){
		echo "Login Sukses !!<br><br>
		Selamat datang $Nama <br>
		Email Anda $Email <br>";

	}else{
		echo "silahkan coba lagi";
	}
}
?>
<?php 
date_default_timezone_set('Asia/Jakarta');
$date = new DateTime('now');
echo $date->format('D-d-M-y & H:i:s');
?>