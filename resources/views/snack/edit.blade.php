@extends('layout.bahagia')

@section('title', 'Tabel Pegawai')
@section('judulhalaman', 'Tabel Pegawai')

@section('konten')
	<h3>Edit Pegawai</h3>

	<br/>
	<br/>

	@foreach($snack as $s)
	<form action="/snack/update" method="post">
		{{ csrf_field() }}
        <div class="form-group">

        <input type="hidden" name="kodesnack" value="{{ $s->kodesnack }}"> <br/>

        <label for ="merksnack">merksnack </label> <input type="text" required="required" name="merksnack" value="{{ $s->merksnack}}" class = "form-control" autocomplete="off"> <br/>

		<label for ="stocksnack">stocksnack </label> <input type="number" name="stocksnack" value = "{{ $s->stocksnack}}" required="required" pattern= "[0-9]{11}" class = "form-control"> <br/>

        <label for = "tersedia">Tersedia <select id = "tersedia" class = "form-control" name = "tersedia" value = "{{ $s->tersedia}}">
            <option value = "T">Tersedia</option>
            <option value = "K">Kosong</option>
        </select>
        <br><br>
		<input type="submit" value="Simpan Data" class = "btn btn-success">
        <a href="/snack" class = "btn btn-primary" > Kembali</a>
	</div>
    </form>
	@endforeach


    @endsection
