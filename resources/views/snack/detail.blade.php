@extends('layout.bahagia')

@section('title', 'Detail Snack')
@section('judulhalaman', 'Detail Data Snack')

@section('konten')
    <br>
	@foreach($snack as $s)
    <a href="/snack" class = "btn btn-primary" > Kembali</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Kode Snack  </th>
                    <th>Merk Snack  </th>
                    <th>Stocksnack  </th>
                    <th>Tersedia    </th>
                </tr>
                <tr>
		            <th>{{ $s->kodesnack }} </th>
                    <th>{{ $s->merksnack }} </th>
		            <th>{{ $s->stocksnack }}</th>
		            <th>{{ $s->tersedia }}  </th>
                </tr>
            </thead>
        </table>
	@endforeach

@endsection
