@extends('layout.bahagia')

@section('title', 'Edit Pegawai')
@section('judulhalaman', 'Edit Data Pegawai')

@section('konten')


	@foreach($pegawai as $p)


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
		{{ $p->pegawai_nama }} <br/><br>
		{{ $p->pegawai_jabatan }} <br/><br><br>
		{{ $p->pegawai_umur }} <br/><br>
		{{ $p->pegawai_alamat }}<br/><br>

	@endforeach



@endsection
