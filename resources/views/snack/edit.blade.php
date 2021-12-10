@extends('layout.bahagia')

@section('title', 'Tabel Pegawai')
@section('judulhalaman', 'Tabel Pegawai')

@section('konten')
	<h3>Edit Pegawai</h3>

	<a href="/snack"> Kembali</a>

	<br/>
	<br/>

	@foreach($snack as $s)
	<form action="/snack/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kodesnack" value="{{ $s->kodesnack }}"> <br/>
		merksnack <input type="text" required="required" name="merksnack" value="{{ $s->merksnack }}"> <br/>
		stocksnack <input type="number" required="required" name="stocksnack" value="{{ $s->stocksnack }}"> <br/>
		tersedia <input type="text" required="required" name="tersedia" value="{{ $s->tersedia }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


    @endsection
