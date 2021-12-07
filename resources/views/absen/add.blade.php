
   @extends('layout.bahagia')

   @section('title', 'Menambah Absen')
   @section('judulhalaman', 'Menambah Data Absen')

   @section('konten')
    <form action="/absen/store" method="post">
        <p> <a href="/absen"> Kembali</a></p>
        {{ csrf_field() }}
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
        {{-- select pegawai starts here --}}
        <label for="idpegawai"></label>
        <select name="idpegawai" id="idpegawai">
            @foreach($pegawai as $p)
            <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
            @endforeach
        </select>
        {{-- select pegawai ends here --}}

        <br>
        <br>
        <div class="form-group">
            <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                <input type='text' class="form-control" name="tanggal" required="required" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>

        <br>
        <label for="status"></label>
        <br>
        <label class="radio-inline">
            <input type="radio" id="Hadir" name="status" value="H">
            <label for="Hadir">Hadir</label><br>
        </label>
        <label class="radio-inline">
            <input type="radio" id="Izin" name="status" value="I">
            <label for="Izin">Izin</label><br>
        </label>
        <label class="radio-inline">
            <input type="radio" id="Sakit" name="status" value="S" checked="checked">
            <label for="Sakit">Sakit</label><br>
        </label>
        <label class="radio-inline">
            <input type="radio" id="Alpha" name="status" value="A">
            <label for="Alpha">Alpha</label>
        </label>
        <br>
        <br>
        <p><input type="submit" value="Simpan Data"></p>

    </form>


@endsection
