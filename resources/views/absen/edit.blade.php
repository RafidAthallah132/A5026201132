
   @extends('layout.bahagia')

   @section('title', 'Mengedit Data Absensi')
   @section('judulhalaman', 'Edit Absensi Pegawai')

   @section('konten')

	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}

        <div class="form-group">

        <input type="hidden" name="id" value="{{ $a->ID }}">
        <table class="table table-borderless">
            <thead>
              <tr>
                <th>IDPegawai </th>
                <th><select name="idpegawai" >
                    @foreach($pegawai as $p)
                    <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->IDPegawai ) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
                    @endforeach
                    </select>
                </th>
              </tr>
              <tr>
                <th>Tanggal</th>
                <th><div class="form-group">
                        <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                            <input type='text' class="form-control" name="tanggal" value="{{ $a->Tanggal }}" required="required" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </th>
              </tr>
              <tr>
                <th>Status</th>
                <th>
                    <label class="radio-inline">
                        <input type="radio" id="Izin" name="status" value="I" @if ($a->Status === "I" ) checked="checked" @endif>
                        <label for="html">Izin</label><br>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" id="Sakit" name="status" value="S"  @if ($a->Status === "S" ) checked="checked" @endif>
                        <label for="css">Sakit</label><br>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" id="Alpha" name="status" value="A"  @if ($a->Status === "A" ) checked="checked" @endif>
                        <label for="javascript">Alpha</label><br>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" id="Hadir" name="status" value="H" @if ($a->Status === "H" ) checked="checked" @endif>
                        <label for="Hadir">Hadir</label><br>
                    </label>
                </th>
              </tr>
            </thead>
        </table>
        <input type="submit" value="Simpan Data" class = "btn btn-success">
        <a href="/absen" class = "btn btn-primary" > Kembali</a>
	</form>
	@endforeach


   @endsection
