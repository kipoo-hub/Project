<?php

namespace App\Http\Controllers;

use App\Models\KategoriPengaduan;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengaduanController extends Controller
{
    public function index()
    {
        $pengaduans = Pengaduan::with(['kategori', 'warga'])
            ->latest()
            ->paginate(10);

        return view('pengaduan.index', compact('pengaduans'));
    }

    public function create()
    {
        $kategoris = KategoriPengaduan::all();
        return view('pengaduan.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kategori_id' => 'required|exists:kategoris_pengaduans',
            'judul' => 'required|max:255',
            'isi' => 'required',
            'lampiran' => 'nullable|file|max:2048|mimes:jpg,png,pdf',
            'is_anonim' => 'boolean'
        ]);

        if ($request->hasFile('lampiran')) {
            $validated['lampiran'] = $request->file('lampiran')->store('pengaduan');
        }

        $pengaduan = Pengaduan::create($validated);

        return redirect()
            ->route('pengaduan.show', $pengaduan)
            ->with('success', 'Pengaduan berhasil dikirim.');
    }

    public function show(Pengaduan $pengaduan)
    {
        $pengaduan->load(['kategori', 'warga', 'tindakLanjuts.petugas']);
        return view('pengaduan.show', compact('pengaduan'));
    }

    public function edit(Pengaduan $pengaduan)
    {
        $kategoris = kategori_pengaduan::all();
        return view('pengaduan.edit', compact('pengaduan', 'kategoris'));
    }

    public function update(Request $request, Pengaduan $pengaduan)
    {
        $validated = $request->validate([
            'kategori_id' => 'required|exists:kategori_pengaduans,id',
            'judul' => 'required|max:255',
            'isi' => 'required',
            'lampiran' => 'nullable|file|max:2048|mimes:jpg,png,pdf',
            'is_anonim' => 'boolean'
        ]);

        if ($request->hasFile('lampiran')) {
            // Delete old file if exists
            if ($pengaduan->lampiran) {
                Storage::delete($pengaduan->lampiran);
            }
            $validated['lampiran'] = $request->file('lampiran')->store('pengaduan');
        }

        $pengaduan->update($validated);

        return redirect()
            ->route('pengaduan.show', $pengaduan)
            ->with('success', 'Pengaduan berhasil diperbarui.');
    }

    public function destroy(Pengaduan $pengaduan)
    {
        if ($pengaduan->lampiran) {
            Storage::delete($pengaduan->lampiran);
        }

        $pengaduan->delete();

        return redirect()
            ->route('pengaduan.index')
            ->with('success', 'Pengaduan berhasil dihapus.');
    }
}
