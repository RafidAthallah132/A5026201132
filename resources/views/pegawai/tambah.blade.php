@extends('layout.bahagia')

@section('title', 'Tambah Pegawai')
@section('judulhalaman', 'Tambah Pegawai')

@section('konten')

	<a href="/pegawai"> Kembali</a>
    <br>
    <br>
	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div class="col-md-1">
            Nama <br><br>
            Jabatan <br><br><br>
            Umur <br><br>
            Alamat <br><br><br><br>
        </div>
        <div class="col-md-1">
            : <br><br>
            :<br><br><br>
            :<br><br>
            :<br><br><br><br>
        </div>
		<input type="text" name="nama" required="required"> <br/> <br>
		<input type="text" name="jabatan" required="required"> <br/> <br>
		<input type="number" name="umur" required="required"> <br/> <br>
		<textarea name="alamat" required="required"></textarea> <br/> <br>
		<input type="submit" value="Simpan Data">
	</form>
@endsection
