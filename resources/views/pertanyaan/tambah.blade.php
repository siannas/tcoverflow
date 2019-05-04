<!DOCTYPE html>
<html>
<head>
	<title>Pertanyaan</title>
</head>
<body>
 

	<h3>Pertanyaan</h3>
 
	<a href="/pertanyaan"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/tcoverflow/public/pertanyaan/store" method="post">
		{{ csrf_field() }}
		Judul <input type="text" name="judul" required="required"> <br/>
		Pertanyaan <textarea name="pertanyaan" required="required"></textarea>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>