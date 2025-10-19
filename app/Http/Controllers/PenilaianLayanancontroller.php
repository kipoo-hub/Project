<?php

namespace App\Http\Controllers;

use App\Models\PenilaianLayanan;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PenilaianLayananController extends Controller
{
    public function index()
    {
        $penilaian = PenilaianLayanan::with('pengaduan')->get();
        return view('penilaian.index', compact('penilaian'));
    }

    public function create()
    {
        $pengaduan = Pengaduan::all();
        return view('penilaian.create', compact('pengaduan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pengaduan_id' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'komentar' => 'nullable|string'
        ]);

        PenilaianLayanan::create($request->all());
        return redirect()->route('penilaian.index')->with('success', 'Penilaian berhasil ditambahkan.');
    }

    public function edit(PenilaianLayanan $penilaian)
    {
        $pengaduan = Pengaduan::all();
        return view('penilaian.edit', compact('penilaian', 'pengaduan'));
    }

    public function update(Request $request, PenilaianLayanan $penilaian)
    {
        $request->validate([
            'pengaduan_id' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'komentar' => 'nullable|string'
        ]);

        $penilaian->update($request->all());
        return redirect()->route('penilaian.index')->with('success', 'Penilaian berhasil diperbarui.');
    }

    public function destroy(PenilaianLayanan $penilaian)
    {
        $penilaian->delete();
        return redirect()->route('penilaian.index')->with('success', 'Penilaian berhasil dihapus.');
    }
}
