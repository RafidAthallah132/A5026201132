
   @extends('layout.bahagia')

   @section('title', 'Mengedit Data Absensi')
   @section('judulhalaman', 'Edit Absensi Pegawai')

   @section('konten')

<h3>{{ $judul }}</h3>
	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
        <p> <a href="/absen"> Kembali</a></p>
        <div class="col-md-1">
            IDPegawai <br><br>
            Tanggal<br><br><br><br>
            Status<br><br><br>
        </div>
        <div class="col-md-1">
            : <br><br>
            :<br><br><br><br>
            :<br><br><br>
        </div>
		<input type="hidden" name="id" value="{{ $a->ID }}">
        <select name="idpegawai" >
            @foreach($pegawai as $p)
             <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->IDPegawai ) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
            @endforeach
        </select>
        <br>
        <br>
                <div class="form-group">
                    <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                        <input type='text' class="form-control" name="tanggal" value="{{ $a->Tanggal }}" required="required" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>

                <br />
                <br>
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
                <br>
                <br>
        <p><input type="submit" value="Simpan Data"></p>
	</form>
	@endforeach


   @endsection
