<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Tambah Data</h3>
<hr/>
<form method="post" action="prosesdata.php?action=add">
<table>
	<tr>
		<td>Id</td>
		<td>:</td>
		<td><input type="text" name="id"/></td>
	</tr>
	<tr>
		<td>judul</td>
		<td>:</td>
		<td><input type="text" name="judul"/></td>
	</tr>
	<tr>
		<td>Author</td>
		<td>:</td>
		<td><input type="text" name="author"/></td>
	</tr>
    <tr>
		<td>Chapter</td>
		<td>:</td>
		<td><input type="text" name="chapter"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Simpan"/></td>
	</tr>
</table>
</form>
</body>
</html