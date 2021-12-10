@extends('layout.bahagia')

@section('title', 'Tabel Pegawai')
@section('judulhalaman', 'Tabel Pegawai')

@section('konten')

	<h3>Data Snack</h3>

    <div class="container" align="center">
        <form action="/snack/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-default" value="CARI">
        </form>
    </div>

	<a href="/snack/tambah"> + Tambah Snack Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Kode Snack</th>
			<th>Merk Snack</th>
			<th>Stock Snack</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($snack as $s)
		<tr>
			<td>{{ $s->kodesnack }}</td>
			<td>{{ $s->merksnack }}</td>
			<td>{{ $s->stocksnack }}</td>
			<td>{{ $s->tersedia }}</td>
			<td>
                <a href="/snack/view/{{ $s->kodesnack }}">View Detail</a>
                |
				<a href="/snack/edit/{{ $s->kodesnack }}">Edit</a>
				|
				<a href="/snack/hapus/{{ $s->kodesnack }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $snack->links() }}
    @endsection
