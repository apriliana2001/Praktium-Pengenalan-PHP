<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Biodata Form</title>
</head>
<body>
	<form action="tampil.php" method="POST">
	<table>
		<tr>
			<td>Nama Lengkap</td>
			<td><input type="text" name="nama" placeholder="Tulis Nama Kamu"></td>
		</tr>
		<tr>
			<td>NPM</td>
			<td><input type="text" name="npm" placeholder="Tulis NPM Kamu"></td>
		</tr>
		<tr>
			<td>Tempat Tanggal Lahir</td>
	   <td><input type=text name=Tempat size=18 placeholder="Kota Kelahiran">
   <select name=Tgl>
   <option name=Tgl>Tgl
   <option name=Tgl>1
   <option name=Tgl>2
   <option name=Tgl>3
   <option name=Tgl>4
   <option name=Tgl>5
   <option name=Tgl>6
   <option name=Tgl>7
   <option name=Tgl>8
   <option name=Tgl>9
   <option name=Tgl>10
   <option name=Tgl>11
   <option name=Tgl>12
   <option name=Tgl>13
   <option name=Tgl>14
   <option name=Tgl>15
   <option name=Tgl>16
   <option name=Tgl>17
   <option name=Tgl>18
   <option name=Tgl>19
   <option name=Tgl>20
   <option name=Tgl>21
   <option name=Tgl>22
   <option name=Tgl>23
   <option name=Tgl>24
   <option name=Tgl>26
   <option name=Tgl>27
   <option name=Tgl>28
   <option name=Tgl>29
   <option name=Tgl>30
   <option name=Tgl>31
   </select>
   <select name=Bln>
   <option name=Bln>Bln
   <option name=Bln>Januari
   <option name=Bln>Februari
   <option name=Bln>Maret
   <option name=Bln>April
   <option name=Bln>Mei
   <option name=Bln>Juni
   <option name=Bln>Juli
   <option name=Bln>Agustus
   <option name=Bln>September
   <option name=Bln>Oktober
   <option name=Bln>November
   <option name=Bln>Desember
   </select>
   <select name=Thn>
   <option name=Thn>Thn
   <option name=Thn>1999
   <option name=Thn>2000
   <option name=Thn>2001
   <option name=Thn>2002
   <option name=Thn>2003
   <option name=Thn>2004
   <option name=Thn>2005
   </select>
   </td>
  </tr>
  <tr>
			<td>Jenis Kelamin</td>
			<td><input type=radio name=JK value=Laki-laki>Laki-laki<input type=radio name=JK value=Perempuan>Perempuan</td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td><input type=radio name="jurusan" value="Teknik Informatika">Teknik Informatika
    		<input type=radio name="jurusan" value="Sistem Informasi">Sistem Informasi
    		<input type=radio name="jurusan" value="Sains Data">Sains Data</td>
		</tr>
		<tr>
			<td>Agama</td> 
			<td><select name="agama">
				<option name="agama" value="Islam">Islam</option>
				<option name="agama" value="Kristen">Kristen</option>
				<option name="agama" value="Katolik">Katolik</option>
				<option name="agama" value="Budha">Budha</option>
				<option name="agama" value="Hindu">Hindu</option></td>
			
			</select>

		</tr>
		<tr>
  		 	<td>Alamat</td>
   			<td><input type=textfield name=alamat placeholder="Tulis Alamat Kamu"></td>
  		</tr>
		<tr>
			<td><input type="submit" value="Tampil"></td>
		</tr>
	</table>

</body>
</html>