<?php
namespace App\Http\Controllers;

use App\Models\KategoriPengaduan;
use Illuminate\Http\Request;

class KategoriPengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris = KategoriPengaduan::withCount('pengaduans')
            ->orderBy('prioritas', 'asc')
            ->get();

        return view('kategori.index', compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     */
   public function create()
{
    $prioritas_list = [
        'tinggi' => 'Tinggi (1-3 hari)',
        'sedang' => 'Sedang (4-7 hari)',
        'rendah' => 'Rendah (8-14 hari)',
    ];

    $kategoris = KategoriPengaduan::all();

    return view('kategori.create', compact('prioritas_list', 'kategoris'));
}


    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {

        $request->merge([
            'is_aktif' => $request->has('is_aktif'),
        ]);

        $data = $request->validate([
            'nama_kategori' => 'required|string|max:255|unique:kategori_pengaduan',
            'sla_hari'      => 'required|integer|min:1|max:30',
            'prioritas'     => 'required|in:tinggi,sedang,rendah',
            'is_aktif'      => 'boolean',
        ]);
        $data['is_aktif'] = $request->has('is_aktif');

        KategoriPengaduan::create($data);

        return redirect()
            ->route('kategori.index')
            ->with('success', 'Kategori pengaduan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriPengaduan $kategori)
    {
        $kategori->load(['pengaduans' => function ($query) {
            $query->latest()->take(5);
        }]);

        return view('kategori.show', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriPengaduan $kategori)
    {
        $prioritas_list = [
            'tinggi' => 'Tinggi (1-3 hari)',
            'sedang' => 'Sedang (4-7 hari)',
            'rendah' => 'Rendah (8-14 hari)',
        ];
        return view('kategori.edit', compact('kategori', 'prioritas_list'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriPengaduan $kategori)
    {
        $data = $request->validate([
            'nama_kategori_kategori_kategori_kategori' => 'required|string|max:255|unique:kategori_pengaduans,nama_kategori_kategori_kategori_kategori,' . $kategori->id,
            'sla_hari'                                 => 'required|integer|min:1|max:30',
            'prioritas'                                => 'required|in:tinggi,sedang,rendah',
            'is_aktif'                                 => 'boolean',
        ]);

        $data['is_aktif'] = $request->has('is_aktif');

        $kategori->update($data);

        return redirect()
            ->route('kategori.index')
            ->with('success', 'Kategori pengaduan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriPengaduan $kategori)
    {
        // Check if category has complaints
        if ($kategori->pengaduans()->count() > 0) {
            return redirect()
                ->route('kategori.index')
                ->with('error', 'Kategori tidak dapat dihapus karena masih memiliki pengaduan terkait.');
        }

        $kategori->delete();
        return redirect()
            ->route('kategori.index')
            ->with('success', 'Kategori pengaduan berhasil dihapus.');
    }
}
