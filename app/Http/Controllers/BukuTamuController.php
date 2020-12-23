<?php

namespace App\Http\Controllers;

use App\Models\bukuTamu;
use App\Models\dataPegawai;
use Illuminate\Http\Request;
use DB;

class BukuTamuController extends Controller
{
    public function index()
    {
        $bukuTamu = bukuTamu::all();
        return view('BukuTamu.index', ['bukuTamu' => $bukuTamu]);
    }
    public function cekNik(Request $request)
    {
        $dataPeg = dataPegawai::all();
        $Nik = $request->nik;
        $DataTamu = DB::table('buku_tamus')->where('nik', $Nik)->first();
        if (DB::table('buku_tamus')->where('nik', $Nik)->doesntExist()) {
            return view('BukuTamu.tambahTamu', ['dataPeg' => $dataPeg, 'Nik' => $Nik]);
        } else {
            return view('BukuTamu.tamuSama', ['dataPeg' => $dataPeg, 'DataTamu' => $DataTamu])->with('eror', 'NIK sudah terdaftar');
        }
    }
    public function simpanTamu(Request $request)
    {
        $bukuTamu = new \App\Models\bukuTamu;
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
            $bukuTamu->foto = $request->file('foto')->getClientOriginalName();
        }
        $bukuTamu->nik = $request->nik;
        $bukuTamu->nama_tamu = $request->nama_tamu;
        $bukuTamu->pekerjaan = $request->pekerjaan;
        $bukuTamu->noHP = $request->noHP;
        $bukuTamu->keperluan = $request->keperluan;
        $bukuTamu->id_pegawai = $request->id_pegawai;
        $bukuTamu->alamat = $request->alamat;
        $bukuTamu->save();
        return redirect('BukuTamu')->with('sukses', 'Data baru berhasil disimpan');
    }
    public function editTamu($id)
    {
        $DataTamu = bukuTamu::find($id);
        $dataPeg = dataPegawai::all();
        return view('BukuTamu.editTamu', ['DataTamu' => $DataTamu, 'dataPeg' => $dataPeg]);
    }
    public function updateTamu(Request $request)
    {

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
            DB::table('buku_tamus')->where('id_buku', $request->id_buku)->update([
                'nik' => $request->nik,
                'nama_tamu' => $request->nama_tamu,
                'pekerjaan' => $request->pekerjaan,
                'noHP' => $request->noHP,
                'keperluan' => $request->keperluan,
                'id_pegawai' => $request->id_pegawai,
                'alamat' => $request->alamat,
                'foto' => $request->file('foto')->getClientOriginalName()
            ]);
        }
        DB::table('buku_tamus')->where('id_buku', $request->id_buku)->update([
            'nik' => $request->nik,
            'nama_tamu' => $request->nama_tamu,
            'pekerjaan' => $request->pekerjaan,
            'noHP' => $request->noHP,
            'keperluan' => $request->keperluan,
            'id_pegawai' => $request->id_pegawai,
            'alamat' => $request->alamat,
            'foto' => $request->foto
        ]);
        return redirect('/BukuTamu')->with('sukses', 'Data berhasil diubah');
    }
    public function hapusTamu($id)
    {
        $bukuTamu = bukuTamu::find($id);
        $bukuTamu->delete();
        return redirect('BukuTamu')->with('delete', 'Data berhasil dihapus');
    }
}
