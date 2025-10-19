<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Warga;
use App\Models\KategoriPengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index()
    {
        $pengaduan = Pengaduan::with(['warga', 'kategori'])->get();
        return view('pengaduan.index', compact('pengaduan'));
    }

    public function create()
    {
        $warga = Warga::all();
        $kategori = KategoriPengaduan::all();
        return view('pengaduan.create', compact('warga', 'kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_tiket' => 'required|unique:pengaduan',
            'warga_id' => 'required',
            'kategori_id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'status' => 'required',
        ]);

        Pengaduan::create($request->all());

        return redirect()->route('pengaduan.index')->with('success', 'Data pengaduan berhasil ditambahkan.');
    }

    public function edit(Pengaduan $pengaduan)
    {
        $warga = Warga::all();
        $kategori = KategoriPengaduan::all();
        return view('pengaduan.edit', compact('pengaduan', 'warga', 'kategori'));
    }

    public function update(Request $request, Pengaduan $pengaduan)
    {
        $request->validate([
            'nomor_tiket' => 'required|unique:pengaduan,nomor_tiket,' . $pengaduan->pengaduan_id . ',pengaduan_id',
            'warga_id' => 'required',
            'kategori_id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'status' => 'required',
        ]);

        $pengaduan->update($request->all());
        return redirect()->route('pengaduan.index')->with('success', 'Data pengaduan berhasil diperbarui.');
    }

    public function destroy(Pengaduan $pengaduan)
    {
        $pengaduan->delete();
        return redirect()->route('pengaduan.index')->with('success', 'Data pengaduan berhasil dihapus.');
    }
}
