@extends('layout.bahagia')

@section('title', 'Edit Pegawai')
@section('judulhalaman', 'Edit Data Pegawai')

@section('konten')


	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
        <p><a href="/pegawai"> Kembali</a></p>
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
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}">
		<input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/><br>
		<input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/><br>
		<input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/><br>
		<textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/><br>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach



@endsection
