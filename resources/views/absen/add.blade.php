
   @extends('layout.bahagia')

   @section('title', 'Menambah Absen')
   @section('judulhalaman', 'Menambah Data Absen')

   @section('konten')
    <form action="/absen/store" method="post">

        {{ csrf_field() }}

        {{-- select pegawai starts here --}}
        <label for="idpegawai">IDPegawai:</label>
        <select name="idpegawai" id="idpegawai">
            @foreach($pegawai as $p)
            <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
            @endforeach
        </select>
        {{-- select pegawai ends here --}}

        <br>

        <div class="form-group">
            <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
            <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                <input type='text' class="form-control" name="tanggal" required="required" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>

        <label for="status">Status :</label>
        <br>
        <input type="radio" id="Hadir" name="status" value="H">
        <label for="Hadir">Hadir</label><br>
        <input type="radio" id="Izin" name="status" value="I">
        <label for="Izin">Izin</label><br>
        <input type="radio" id="Sakit" name="status" value="S" checked="checked">
        <label for="Sakit">Sakit</label><br>
        <input type="radio" id="Alpha" name="status" value="A">
        <label for="Alpha">Alpha</label>

        <p><input type="submit" value="Simpan Data"></p>

    </form>

    <h2> <a href="/absen"> Kembali</a></h2>
@endsection
