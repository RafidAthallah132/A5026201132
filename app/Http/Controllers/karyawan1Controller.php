<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class karyawan1Controller extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $karyawan1 = DB::table('karyawan1')->get();

        // mengirim data pegawai ke view index
        return view('karyawan1.index', ['karyawan1' => $karyawan1]);
    }

    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $karyawan1 = DB::table('karyawan1')->where('NIP', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('karyawan1.edit', ['karyawan1' => $karyawan1]);
    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('karyawan1')->where('NIP', $request->NIP)->update([
            'Nama' => $request->Nama,
            'Pangkat' => $request->Pangkat,
            'Gaji' => $request->Gaji,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/karyawan1');
    }

    public function detail($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $karyawan1 = DB::table('karyawan1')->where('NIP', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('karyawan1.detail', ['karyawan1' => $karyawan1]);
    }
}
