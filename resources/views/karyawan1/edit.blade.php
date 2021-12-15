@extends('layout.bahagia')

@section('title', 'Tabel karyawan1')
@section('judulhalaman', 'Tabel karyawan1')

@section('konten')

	<a href="/karyawan1"> Kembali</a>

	<br/>
	<br/>

	@foreach($karyawan1 as $k)
	<form action="/karyawan1/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="NIP" value="{{ $k->NIP }}"> <br/>
		Nama <input type="text" required="required" name="Nama" value="{{ $k->Nama }}"> <br/>
		Pangkat <input type="text" required="required" name="Pangkat" value="{{ $k->Pangkat }}"> <br/>
		Umur <input type="number" required="required" name="Gaji" value="{{ $k->Gaji }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


    @endsection
