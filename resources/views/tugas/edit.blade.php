<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $t)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $t->ID }}"> <br/>
		IDPegawai <input type="number" required="required" name="idpegawai" value="{{ $t->IDPegawai }}"> <br/>
		Tanggal <input type="datetime" required="required" name="tanggal" value="{{ $t->Tanggal }}"> <br/>
		NamaTugas <input type="text" required="required" name="namatugas" value="{{ $t->NamaTugas }}"> <br/>
		Status <input type="text" required="required" name="status">{{ $t->Status }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
