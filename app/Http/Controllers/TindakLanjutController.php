<?php

namespace App\Http\Controllers;

use App\Models\TindakLanjut;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class TindakLanjutController extends Controller
{
    public function index()
    {
        $tindak = TindakLanjut::with('pengaduan')->get();
        return view('pages.tindak.index', compact('tindak'));
    }

    public function create()
    {
        $pengaduan = Pengaduan::all();
        return view('pages.tindak.create', compact('pengaduan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pengaduan_id' => 'required',
            'petugas' => 'required',
            'aksi' => 'required',
            'catatan' => 'required'
        ]);

        TindakLanjut::create($request->all());
        return redirect()->route('pages.tindak.index')->with('success', 'Tindak lanjut berhasil ditambahkan.');
    }

    public function edit(TindakLanjut $tindak)
    {
        $pengaduan = Pengaduan::all();
        return view('pages.tindak.edit', compact('tindak', 'pengaduan'));
    }

    public function update(Request $request, TindakLanjut $tindak)
    {
        $request->validate([
            'pengaduan_id' => 'required',
            'petugas' => 'required',
            'aksi' => 'required',
            'catatan' => 'required'
        ]);

        $tindak->update($request->all());
        return redirect()->route('pages.tindak.index')->with('success', 'Data tindak lanjut berhasil diperbarui.');
    }

    public function destroy(TindakLanjut $tindak)
    {
        $tindak->delete();
        return redirect()->route('pages.tindak.index')->with('success', 'Data tindak lanjut berhasil dihapus.');
    }
}
