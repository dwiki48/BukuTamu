<?php

namespace App\Http\Controllers;

use App\Models\dataPegawai;
use Illuminate\Http\Request;

class DataPegawaiController extends Controller
{
    public function index()
    {
        $dataPegawai = dataPegawai::all();
        return view('DataPegawai.index', ['dataPegawai' => $dataPegawai]);
    }
    public function create(Request $request)
    {
        dataPegawai::create($request->all());
        return redirect('DataPegawai')->with('sukses', 'Data baru berhasil disimpan');
    }
    public function editPegawai(Request $request)
    {
        $dataPegawai = dataPegawai::find($request->id_pegawai);
        $dataPegawai->nip = $request->nip;
        $dataPegawai->nama_pegawai = $request->nama_pegawai;
        $dataPegawai->jabatan = $request->jabatan;
        $dataPegawai->save();
        return redirect('DataPegawai')->with('sukses', 'Data berhasil diperbarui');
    }
    public function hapusPegawai($id)
    {
        $dataPegawai = dataPegawai::find($id);
        $dataPegawai->delete();
        return redirect('DataPegawai')->with('delete', 'Data berhasil dihapus');
    }
}
