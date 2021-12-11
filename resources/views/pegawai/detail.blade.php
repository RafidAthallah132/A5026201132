@extends('layout.bahagia')

@section('title', 'Tabel Pegawai')
@section('judulhalaman', 'Detail Pegawai')

@section('konten')


	@foreach($pegawai as $p)
    <a href="/pegawai" class = "btn btn-primary" > Kembali</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID      </th>
                <th>Nama    </th>
                <th>Jabatan </th>
                <th>Umur    </th>
                <th>Alamat  </th>
            </tr>
            <tr>
                <th>{{ $p->pegawai_id }} </th>
                <th>{{ $p->pegawai_nama }} </th>
                <th>{{ $p->pegawai_jabatan }} </th>
                <th>{{ $p->pegawai_umur }} </th>
                <th>{{ $p->pegawai_alamat }}</th>
            </tr>
        </thead>
    </table>
	@endforeach

@endsection
