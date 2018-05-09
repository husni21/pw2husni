<!DOCTYPE html>
<html>
<head>
	<title>registrasi peserta</title>
</head>
<body>
  <?php 
       $kabupaten = [
                       [
                        'id'=>1,
                        'nama_kab'=>"kota pontianak"
                       ],
                       [
                        'id'=>2,
                        'nama_kab'=>"sekadau"
                       ],
                       [
                        'id'=>3,
                        'nama_kab'=>"sintang"
                       ]
                    ];
   ?>
   
<h1>registrasi</h1>
<form method="GET" action="proses.php">
<table>
	<tr>
		<td>nama</td>
		<td>:<input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>username</td>
		<td>:<input type="text" name="username"></td>
	</tr>
	<tr>
		<td>password</td>
		<td>:<input type="password" name="password"></td>

	</tr>
	<tr>
		<td>alamat</td>
		
		<td>:</td>
		<textarea name="alamat" row="5" cols="30"></textarea></td>
	</tr>
	<tr>
		<td><label for="kabupaten">kabupaten asal</label></td>
		<td>:</td>
		<td>
			<select name="kabupaten">
				<?php foreach ($kabupaten as $kab): ?>
					<option value="<?php echo $kab['id']; ?>"><?php echo $kab['nama_kab'] ?></option>
				<?php endforeach ?>
			</select>
		</td>
	</tr>
	<tr>
		<td>no._hp</td>
		<td>:<input type="number" name="no._hp"></td>
	</tr>
	<tr>
			<td>jenis kelamin</td>
			<td>:
			
				<input type="radio"	name="jenis kelamin">Pria
				<input type="radio"	name="jenis kelamin">Wanita
            </td>
		</tr>
		<tr>
			<td>Prodi pilihan</td>
			<td>:<input type="checkbox"	name="Prodi1">sistem informasi<br>
				 <input type="checkbox"	name="Prodi2">sistem komputer<br>
				 <input type="checkbox"	name="Prodi4">informatika<br>
            </td>
		</tr>

		<td>
			<input type="submit"	name="submit"	value="simpan">
		</td>

</table>
</form>

</body>
</html>