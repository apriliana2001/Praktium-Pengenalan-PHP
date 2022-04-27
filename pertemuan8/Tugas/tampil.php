<?php
$nama=$_POST['nama'];
$npm=$_POST['npm'];
$Tempat=$_POST['Tempat'];
$Tgl=$_POST['Tgl'];
$Bln=$_POST['Bln'];
$Thn=$_POST['Thn'];
$JK=$_POST['JK'];
$jurusan=$_POST['jurusan'];
$agama=$_POST['agama'];
$alamat=$_POST['alamat'];


echo "Nama Lengkap     : $nama<br>";
echo "NPM      : $npm<br>";
echo "Tempat dan Tanggal Lahir : $Tempat, $Tgl $Bln $Thn<br>";
echo "Jenis Kelamin  : $JK<br>";
echo "Jurusan  : $jurusan<br>";
echo "Agama  : $agama<br>";
echo "Alamat : $alamat<br>";
?>