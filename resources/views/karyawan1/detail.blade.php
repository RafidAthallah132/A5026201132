@extends('layout.bahagia')

@section('title', 'Tabel Pegawai')
@section('judulhalaman', 'Detail Pegawai')

@section('konten')


	@foreach($karyawan1 as $k)
    <a href="/karyawan1" class = "btn btn-primary" > Kembali</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>NIP      </th>
                <th>Nama    </th>
                <th>Pangkat </th>
                <th>Gaji    </th>
            </tr>
            <tr>
                <th>{{ $k->NIP }} </th>
                <th>{{ $k->Nama }} </th>
                <th>{{ $k->Pangkat }} </th>
                <th>{{ number_format($k->Gaji, 0, ',', '.') }} </th>
            </tr>
        </thead>
    </table>
	@endforeach

@endsection
