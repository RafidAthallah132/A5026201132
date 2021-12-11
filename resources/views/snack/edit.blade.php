@extends('layout.bahagia')

@section('title', 'Tabel Snack')
@section('judulhalaman', 'Edit Tabel Snack')

@section('konten')

	<br/>
	<br/>

	@foreach($snack as $s)
	<form action="/snack/update" method="post">
		{{ csrf_field() }}
        <div class="form-group">

        <input type="hidden" name="kodesnack" value="{{ $s->kodesnack }}">

        <table class="table table-borderless">
            <thead>
              <tr>
                  <th>merksnack</th>
                  <th><label for ="merksnack"> </label> <input type="text" required="required" name="merksnack" value="{{ $s->merksnack}}" class = "form-control" autocomplete="off"></th>
              </tr>
              <tr>
                  <th>stocksnack</th>
		          <th><label for ="stocksnack"> </label> <input type="number" name="stocksnack" value = "{{ $s->stocksnack}}" required="required" pattern= "[0-9]{11}" class = "form-control"> </th>
              </tr>
              <tr>
                  <th>Tersedia</th>
                  <th><label class="radio-inline">
                    <input type="radio" id="Hadir" name="tersedia" value="T">
                    <label for="Hadir">Tersedia</label><br>
                </label>
                <label class="radio-inline">
                    <input type="radio" id="Izin" name="tersedia" value="K">
                    <label for="Izin">Kosong</label><br>
                </label>
                  </th>
                  </select>
                </tr>
            </thead>
        </table>
        <br><br>
		<input type="submit" value="Simpan Data" class = "btn btn-success">
        <a href="/snack" class = "btn btn-primary" > Kembali</a>
	</div>
    </form>
	@endforeach


    @endsection
