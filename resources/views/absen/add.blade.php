
   @extends('layout.bahagia')

   @section('title', 'Menambah Absen')
   @section('judulhalaman', 'Menambah Data Absen')

   @section('konten')
    <form action="/absen/store" method="post">
        {{ csrf_field() }}
        <table class="table table-borderless">
            <tbody>
              <tr>
                <th>IDPegawai </th>
                <th><label for="idpegawai"></label>
                    <select name="idpegawai" id="IDpegawai">
                        @foreach($pegawai as $p)
                        <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
                        @endforeach
                    </select>
                </th>
              </tr>
              <tr>
                <th>Tanggal</th>
                <th><div class="form-group">
                        <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                            <input type='text' class="form-control" name="tanggal" required="required" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </th>
              </tr>
              <tr>
                <th>Status</th>
                <th><label for="status"></label>
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
                </th>
              </tr>
            </tbody>
        </table>
        <input type="submit" value="Simpan Data" class = "btn btn-success">
        <a href="/absen" class = "btn btn-primary" > Kembali</a>
    </form>


@endsection
