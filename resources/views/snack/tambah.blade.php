@extends('layout.bahagia')

@section('title', 'Tabel Snack')
@section('judulhalaman', 'Tabel Snack')

@section('konten')
	<h3>Tambah Data snack</h3>

	<br/>
	<br/>

	<form action="/snack/store" method="post">
		{{ csrf_field() }}
        <table class="table table-borderless">
            <tbody>
              <tr>
		        <th>kodesnack </th>
                <th><input type="number" name="kodesnack" required="required"> </th>
              </tr>
              <tr>
                <th>merksnack</th>
                <th><input type="text" name="merksnack" required="required"> </th>
              </tr>
              <tr>
                <th>stocksnack </th>
                <th><input type="number" name="stocksnack" required="required"> </th>
              </tr>
              <tr>
                <th>tersedia </th>
                <th><label for="status"></label>
                <label class="radio-inline">
                    <input type="radio" id="tersedia" name="tersedia" value="T">
                    <label for="Hadir">Tersedia</label><br>
                </label>
                <label class="radio-inline">
                    <input type="radio" id="tersedia" name="tersedia" value="K">
                    <label for="Izin">Kosong</label><br>
                </label>
                </th>
            </tr>
            </tbody>
        </table>
        <input type="submit" value="Simpan Data" class = "btn btn-success">
        <a href="/snack" class = "btn btn-primary" > Kembali</a>
	</form>

@endsection
