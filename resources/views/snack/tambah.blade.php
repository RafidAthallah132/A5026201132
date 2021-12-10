@extends('layout.bahagia')

@section('title', 'Tabel Pegawai')
@section('judulhalaman', 'Tabel Pegawai')

@section('konten')
	<h3>Data snack</h3>

	<a href="/snack"> Kembali</a>

	<br/>
	<br/>

	<form action="/snack/store" method="post">
		{{ csrf_field() }}
		kodesnack <input type="number" name="kodesnack" required="required"> <br/>
		merksnack <input type="text" name="merksnack" required="required"> <br/>
		stocksnack <input type="number" name="stocksnack" required="required"> <br/>
		tersedia <input type="text" name="tersedia" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

@endsection
