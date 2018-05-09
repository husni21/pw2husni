<!DOCTYPE html>
<html>
<head>
	<title>Halaman pemrosesan</title>
</head>
<body>
<h1>Selamat bergabung</h1>
<p>anda terdaftar dengan identitas:</p>
<table>
<tr>
	<td>Nama</td>
	<td>:</td>
	<td><?php echo $_POST ['nama']; ?></td>
</tr>
<tr>
	<td>Alamat</td>
	<td>:</td>
	<td><?php echo $_POST['alamat']; ?></td>
</tr>
<tr>
	<td>username</td>
	<td>:</td>
	<td><?php echo $_POST ['username']; ?></td>
</tr>
</table>

</body>
</html>