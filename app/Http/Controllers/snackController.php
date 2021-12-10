<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class snackController extends Controller
{
    public function index()
    {
        // mengambil data dari table snack
        //$snack = DB::table('snack')->get();

        $snack = DB::table('snack')->paginate(3);
        // mengirim data snack ke view index
        return view('snack.index', ['snack' => $snack]);
    }
    // method untuk menampilkan view form tambah snack
    public function tambah()
    {

        // memanggil view tambah
        return view('snack.tambah');
    }
    // method untuk insert data ke table snack
    public function store(Request $request)
    {
        // insert data ke table snack
        DB::table('snack')->insert([
            'merksnack' => $request->merksnack,
            'stocksnack' => $request->stocksnack,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman snack
        return redirect('/snack');
    }

    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $snack = DB::table('snack')->where('kodesnack', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('snack.edit', ['snack' => $snack]);
    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('snack')->where('kodesnack', $request->id)->update([
            'merksnack' => $request->merksnack,
            'stocksnack' => $request->stocksnack,
            'tersedia' => $request->tersedia,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/snack');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('snack')->where('kodesnack', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/snack');
    }

    public function detail($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $snack = DB::table('snack')->where('kodesnack', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('snack.detail', ['snack' => $snack]);
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table snack sesuai pencarian data
		$snack = DB::table('snack')
		->where('merksnack','like',"%" . $cari . "%")
		->paginate(3);

    		// mengirim data snack ke view index
		return view('snack.index',['snack' => $snack]);

	}
}
