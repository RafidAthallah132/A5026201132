@extends('layout.bahagia')

@section('title', 'Tambah Pegawai')
@section('judulhalaman', 'Tambah Pegawai')

@section('konten')

    <br>
    <br>
	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <table class="table table-borderless">
            <tbody>
              <tr>
                <th>Nama    </th>
                <th><input type="text" name="nama" required="required"> </th>
              </tr>
              <tr>
                <th>Jabatan </th>
                <th><input type="text" name="jabatan" required="required"> </th>
              </tr>
              <tr>
                <th>Umur    </th>
                <th><input type="number" name="umur" required="required"> <br/> </th>
              </tr>
              <tr>
                <th>Alamat  </th>
                <th><textarea name="alamat" required="required"></textarea> <br/> </th>
              </tr>
            </tbody>
        </table>
		<input type="submit" value="Simpan Data" class = "btn btn-success">
        <a href="/pegawai" class = "btn btn-primary" > Kembali</a>
	</form>
@endsection
