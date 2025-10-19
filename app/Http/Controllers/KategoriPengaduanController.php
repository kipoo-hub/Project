<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriPengaduan;

class KategoriPengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = KategoriPengaduan::orderBy('created_at', 'desc')->get();
        return view('kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'sla_hari' => 'required|integer',
            'prioritas' => 'required|string|max:50',
        ]);

        KategoriPengaduan::create($data);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriPengaduan $kategori)
    {
        return view('kategori.show', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriPengaduan $kategori)
    {
        return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriPengaduan $kategori)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'sla_hari' => 'required|integer',
            'prioritas' => 'required|string|max:50',
        ]);

        $kategori->update($data);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriPengaduan $kategori)
    {
        $kategori->delete();
        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus.');
    }
}
