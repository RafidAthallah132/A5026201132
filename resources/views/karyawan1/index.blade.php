@extends('layout.bahagia')

@section('title', 'Tabel karyawan1')
@section('judulhalaman', 'Tabel karyawan1')

@section('konten')

	<br/>
	<br/>

    <table class="table table-striped">
        <thead>
		<tr>
			<th>NIP</th>
			<th>Nama</th>
			<th>Pangkat</th>
			<th>Gaji</th>
			<th>Opsi</th>
		</tr>
		@foreach($karyawan1 as $k)
		<tr>
			<td>{{ $k->NIP }}</td>
			<td>{{ $k->Nama }}</td>
			<td>{{ $k->Pangkat }}</td>
			<td>{{ number_format($k->Gaji, 0, ',', '.') }}</td>
			<td>
				<a href="/karyawan1/edit/{{ $k->NIP }}">Edit</a>
				|
				<a href="/karyawan1/view/{{ $k->NIP }}">View</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
