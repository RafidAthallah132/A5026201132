@extends('layout.bahagia')

@section('title', 'Tambah Tugas')

@section('judulhalaman', 'Tambah Tugas')

@section('konten')
	<a href="/tugas"> Kembali</a>

    <br>
    <br>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
        <table class="table table-borderless">
            <tbody>
              <tr>
                <th>IDPegawai </th>
                <th><select name="idpegawai" id="IDPegawai">
                    @foreach($pegawai as $p)
                    <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
                    @endforeach
                    </select>
                </th>
              </tr>
              <tr>
                <th>Tanggal </th>
                <th><div class="form-group">
                        <div class="input-group date col-sm-2" id="dtpickerdemo">
                            <input type="text" class="form-control" name="tanggal" required="required" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </th>
              </tr>
              <tr>
                <th>Nama Tugas </th>
                <th><input type="text" maxlength="50" name="namatugas" required="required"> </th>
              </tr>
              <tr>
                <th>Status </th>
                <th><label class="radio-inline">
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
                </th>
              </tr>
            </tbody>
        </table>
		<input type="submit" value="Simpan Data" class = "btn btn-success">
        <a href="/tugas" class = "btn btn-primary" > Kembali</a>
	</form>

@endsection
