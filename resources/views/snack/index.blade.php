@extends('layout.bahagia')

@section('title', 'Tabel Snack')
@section('judulhalaman', 'Tabel Snack')

@section('konten')

	<h3>Data Snack</h3>

    <div class="container" align="center">
        <form action="/snack/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Nama Snack .." value="{{ old('cari') }}"> <br>
            <input type="submit" class="btn btn-info" value="CARI">
        </form>
    </div>

	<a href="/snack/tambah" class = "btn btn-primary"> + Tambah Snack Baru</a>

	<br/>
	<br/>

	<table class="table table-striped">
        <thead>
		<tr>
			<th>Kode Snack</th>
			<th>Merk Snack</th>
			<th>Stock Snack</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
        </thead>
		@foreach($snack as $s)
        <tbody>
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
        </tbody>
		@endforeach
	</table>

    {{ $snack->links() }}
    @endsection
