@extends('layout.bahagia')

@section('title', 'Edit Tugas')

@section('judulhalaman', 'Edit Tugas')

@section('konten')
	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $t)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $t->ID }}"> <br/>
        <div class="col-md-2">
            IDPegawai <br><br>
            Tanggal <br><br><br><br>
            Nama Tugas <br><br>
            Status <br><br><br>
        </div>
        <div class="col-md-1">
            : <br><br>
            :<br><br><br><br>
            :<br><br>
            :<br><br><br>
        </div>
        <select name="idpegawai" id="IDPegawai">
            @foreach($pegawai as $p)
             <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $t->IDPegawai ) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
            @endforeach
        </select>
        <br>
        <br>

        <div class="form-group">
            <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                <input type='text' class="form-control" name="tanggal" value="{{ $t->Tanggal }}" required="required" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
        <br/>
		<input type="text" maxlength="50" required="required" name="namatugas" value="{{ $t->NamaTugas }}"> <br/><br>
		<input type="text" maxlength="1" required="required" name="status" value="{{  $t->Status  }}"> <br/><br>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

@endsection
