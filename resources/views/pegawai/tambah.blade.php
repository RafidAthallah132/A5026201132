@extends('layout.bahagia')

@section('title', 'Tambah Pegawai')
@section('judulhalaman', 'Tambah Pegawai')

@section('konten')

	<a href="/pegawai"> Kembali</a>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		Nama &nbsp&nbsp <input type="text" name="nama" required="required"> <br/> <br>
		Jabatan <input type="text" name="jabatan" required="required"> <br/> <br>
		Umur &nbsp&nbsp&nbsp <input type="number" name="umur" required="required"> <br/> <br>
		Alamat &nbsp <textarea name="alamat" required="required"></textarea> <br/> <br>
		<input type="submit" value="Simpan Data">
	</form>
@endsection
