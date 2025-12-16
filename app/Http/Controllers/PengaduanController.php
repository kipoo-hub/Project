<?php

namespace App\Http\Controllers;

use App\Models\KategoriPengaduan;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PengaduanController extends Controller
{
    /**
     * Menampilkan daftar pengaduan.
     */
    public function index()
{
    $kategoris = KategoriPengaduan::orderBy('nama')->get(); // kategori untuk filter/dropdown

    $pengaduans = Pengaduan::with(['kategori', 'warga'])
        ->filter(request()->all())
        ->orderBy('created_at', 'desc')
        ->paginate(12);

    return view('pages.pengaduan.index', compact('pengaduans', 'kategoris'));
}


    /**
     * Formulir membuat pengaduan baru.
     */
    public function create()
    {
        $kategoris = KategoriPengaduan::where('is_aktif', true)->get();

        return view('pages.pengaduan.create', compact('kategoris'));
    }

    /**
     * Simpan pengaduan baru ke database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kategori_id' => 'required|exists:kategori_pengaduan,kategori_id',
            'judul'       => 'required|string|max:255',
            'deskripsi'   => 'required|string',
            'lampiran'    => 'nullable|file|max:2048|mimes:jpg,png,pdf,jpeg',

            // PERBAIKAN 1: Mengizinkan nilai 'on' dari checkbox
            'is_anonim'   => 'nullable',
        ]);

        // ... kode auth ...
        if (auth()->check()) {
            $validated['warga_id'] = auth()->id();
        }

        // ... kode upload file ...
        if ($request->hasFile('lampiran')) {
            $validated['lampiran'] = $request->file('lampiran')->store('pengaduan', 'public');
        }

        // Kode ini mengubah 'on' -> true, atau null -> false
        $validated['is_anonim'] = $request->boolean('is_anonim');

        // PERBAIKAN 2: Menambahkan nomor tiket
        $validated['nomor_tiket'] = 'TIK-' . now()->format('YmdHis');

        $validated['status'] = 'draft';

        $pengaduan = Pengaduan::create($validated);

        return redirect()
            ->route('pengaduan.show', $pengaduan)
            ->with('success', 'Pengaduan berhasil dikirim.');
    }

    /**
     * Menampilkan detail pengaduan tertentu.
     */
    public function show(Pengaduan $pengaduan)
    {
        $pengaduan->load(['kategori', 'warga', 'tindakLanjuts']);

        return view('pages.pengaduan.show', compact('pengaduan'));
    }

    /**
     * Form edit pengaduan.
     */
    public function edit(Pengaduan $pengaduan)
    {
        $kategoris = KategoriPengaduan::where('is_aktif', true)->get();

        return view('pages.pengaduan.edit', compact('pengaduan', 'kategoris'));
    }

    /**
     * Update data pengaduan.
     */
    /**
     * Update data pengaduan.
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        $validated = $request->validate([
            'kategori_id' => 'required|exists:kategori_pengaduan,kategori_id',
            'judul'       => 'required|string|max:255',

            // PERBAIKAN 1: Ganti 'isi' menjadi 'deskripsi'
            'deskripsi'   => 'required|string',

            'lampiran'    => 'nullable|file|max:2048|mimes:jpg,png,pdf,jpeg',

            // PERBAIKAN 2: Ganti 'nullable|boolean' menjadi 'nullable'
            'is_anonim'   => 'nullable',
        ]);

        if ($request->hasFile('lampiran')) {
            // Hapus file lama jika ada
            if ($pengaduan->lampiran && Storage::disk('public')->exists($pengaduan->lampiran)) {
                Storage::disk('public')->delete($pengaduan->lampiran);
            }
            // Simpan file baru
            $validated['lampiran'] = $request->file('lampiran')->store('pengaduan', 'public');
        }

        // Kode ini mengubah 'on' -> true, atau null -> false
        $validated['is_anonim'] = $request->boolean('is_anonim');

        $pengaduan->update($validated);

        return redirect()
            ->route('pengaduan.index') // Arahkan kembali ke halaman index
            ->with('success', 'Pengaduan berhasil diperbarui.');
    }

    /**
     * Hapus pengaduan.
     */
    public function destroy(Pengaduan $pengaduan)
    {
        if ($pengaduan->lampiran && Storage::disk('public')->exists($pengaduan->lampiran)) {
            Storage::disk('public')->delete($pengaduan->lampiran);
        }

        $pengaduan->delete();

        return redirect()
            ->route('pengaduan.index')
            ->with('success', 'Pengaduan berhasil dihapus.');
    }
}
