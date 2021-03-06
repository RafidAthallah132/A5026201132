@extends('layout.bahagia')

@section('title', 'Tabel Tugas')

@section('judulhalaman', 'Tabel Tugas')

@section('konten')
	<a href="/tugas/tambah" class = "btn btn-primary"> + Tambah Tugas Baru</a>
    <br>
    <br>
    <table class="table table-striped">
        <thead>
		<tr>
			<th>Nama Pegawai</th>
			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>NamaTugas</th>
			<th>Status</th>
            <th>Opsi</th>
		</tr>
        </thead>
		@foreach($tugas as $t)
        <tbody>
		<tr>
			<td>{{ $t->pegawai_nama }}</td>
			<td>{{ $t->IDPegawai }}</td>
			<td>{{ $t->Tanggal }}</td>
			<td>{{ $t->NamaTugas }}</td>
            <td>{{ $t->Status }}</td>
			<td>
				<a href="/tugas/edit/{{ $t->ID }}">Edit</a>
				|
				<a href="/tugas/hapus/{{ $t->ID }}">Hapus</a>
			</td>
		</tr>
        </tbody>
		@endforeach
	</table>
    {{$tugas->links()}}

@endsection
