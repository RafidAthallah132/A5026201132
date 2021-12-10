@extends('layout.bahagia')

@section('title', 'Edit Pegawai')
@section('judulhalaman', 'Edit Data Pegawai')

@section('konten')


	@foreach($snack as $s)


        <p><a href="/snack"> Kembali</a></p>
        <div class="col-md-1">
            Kode Snack <br><br>
            Merk Snack <br><br><br>
            Stocksnack <br><br>
            Tersedia <br><br><br><br>
        </div>
        <div class="col-md-1">
            : <br><br>
            :<br><br><br>
            :<br><br>
            :<br><br><br><br>
        </div>
		{{ $s->kodesnack }} <br/><br>
		{{ $s->merksnack }} <br/><br><br>
		{{ $s->stocksnack }} <br/><br>
		{{ $s->tersedia }}<br/><br>

	@endforeach



@endsection
