@extends('layout.bahagia')

@section('title', 'Tambah Tugas')

@section('judulhalaman', 'Tambah Tugas')

@section('konten')
	<a href="/tugas"> Kembali</a>

    <br>
    <br>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
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
		{{-- select pegawai starts here --}}
        <select name="idpegawai" id="IDPegawai">
            @foreach($pegawai as $p)
            <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
            @endforeach
        </select>
        <br><br>
        {{-- select pegawai ends here --}}


        {{-- datetime starts here --}}
        <div class="form-group">
            <div class="input-group date col-sm-2" id="dtpickerdemo">
                <input type="text" class="form-control" name="tanggal" required="required" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
        {{-- datetime ends here --}}
        <br>

		<input type="text" maxlength="50" name="namatugas" required="required"> <br> <br>
		<label class="radio-inline">
            <input type="radio" id="Aktif" name="status" value="A" checked="checked">
            <label for="Hadir">Aktif</label><br>
        </label>
        <label class="radio-inline">
            <input type="radio" id="Luar Kota" name="status" value="L">
            <label for="Izin">Luar Kota</label><br>
        </label>
        <label class="radio-inline">
            <input type="radio" id="Cuti" name="status" value="C">
            <label for="Sakit">Cuti</label><br>
        </label>
        <label class="radio-inline">
            <input type="radio" id="Pensiun" name="status" value="P">
            <label for="Alpha">Pensiun</label>
        </label>
        <br>
        <br>
		<input type="submit" value="Simpan Data">
	</form>

@endsection
