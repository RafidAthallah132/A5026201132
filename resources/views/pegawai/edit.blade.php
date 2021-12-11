@extends('layout.bahagia')

@section('title', 'Edit Pegawai')
@section('judulhalaman', 'Edit Data Pegawai')

@section('konten')


	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}

        <div class="form-group">

        <input type="hidden" name="id" value="{{ $p->pegawai_id }}">

        <table class="table table-borderless">
            <tbody>
              <tr>
                <th>Nama </th>
                <th><input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> </th>
              </tr>
              <tr>
                <th>Jabatan </th>
                <th><input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> </th>
              </tr>
              <tr>
                <th>Umur </th>
                <th><input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> </th>
              </tr>
              <tr>
                <th>Alamat </th>
                <th><textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> </th>
              </tr>
            </tbody>
        </table>
        <input type="submit" value="Simpan Data" class = "btn btn-success">
        <a href="/pegawai" class = "btn btn-primary" > Kembali</a>
        </div>
	</form>
	@endforeach



@endsection
