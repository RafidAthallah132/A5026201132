@extends('layout.bahagia')

@section('title', 'Edit Tugas')

@section('judulhalaman', 'Edit Tugas')

@section('konten')
	<br/>

	@foreach($tugas as $t)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $t->ID }}"> <br/>
        <table class="table table-borderless">
            <tbody>
              <tr>
                <th>Nama Pegawai </th>
                <th><select name="idpegawai" id="IDPegawai">
                    @foreach($pegawai as $p)
                     <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $t->IDPegawai ) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
                    @endforeach
                    </select>
                </th>
              </tr>
                <th>Tanggal </th>
                <th>
                    <div class="form-group">
                        <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                            <input type='text' class="form-control" name="tanggal" value="{{ $t->Tanggal }}" required="required" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </th>
              </tr>
              <tr>
                <th>Nama Tugas </th>
                <th><input type="text" maxlength="50" required="required" name="namatugas" value="{{ $t->NamaTugas }}"> </th>
              </tr>
              <tr>
                <th>Status </th>
                <th>
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
                </th>
              </tr>
            </tbody>
        </table>
		<input type="submit" value="Simpan Data" class = "btn btn-success">
        <a href="/tugas" class = "btn btn-primary" > Kembali</a>

	</form>
	@endforeach

@endsection
