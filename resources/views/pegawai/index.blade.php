@extends('layout.bahagia')

@section('title', 'Tabel Pegawai')
@section('judulhalaman', 'Tabel Pegawai')

@section('konten')
<div class="container" align="center">
    <form action="/pegawai/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
		<input type="submit" class="btn btn-default" value="CARI">
	</form>
</div>

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
    <br>
    <br>
    <table class="table table-striped">
    <thead>
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
    </thead>
		@foreach($pegawai as $p)
        <tbody>
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/view/{{ $p->pegawai_id }}">View Detail</a>
				|
                <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                |
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
    </tbody>
		@endforeach
	</table>

    {{ $pegawai->links() }}
</div>

@endsection
