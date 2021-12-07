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
		<label class="radio-inline">
            <input type="radio" id="Aktif" name="status" value="A" @if ($t->Status === "A" ) checked="checked" @endif>
            <label for="html">Aktif</label><br>
        </label>
        <label class="radio-inline">
            <input type="radio" id="Luar Kota" name="status" value="L"  @if ($t->Status === "L" ) checked="checked" @endif>
            <label for="css">Luar Kota</label><br>
        </label>
        <label class="radio-inline">
            <input type="radio" id="Cuti" name="status" value="C"  @if ($t->Status === "C" ) checked="checked" @endif>
            <label for="javascript">Cuti</label><br>
        </label>
        <label class="radio-inline">
            <input type="radio" id="Pensiun" name="status" value="P" @if ($t->Status === "P" ) checked="checked" @endif>
            <label for="Hadir">Pensiun</label><br>
        </label>
        <br>
        <br>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

@endsection
