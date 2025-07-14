<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::all();
        return view('admin.produk.index', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all(); // Assuming you have a Kategori model
        return view('admin.produk.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga_produk' => 'required|numeric',
            'stok_produk' => 'required|integer',
            'gambar_produk' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi_produk' => 'nullable|string',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);

        $data = $request->except('gambar_produk');

        if ($request->hasFile('gambar_produk')) {
            $file = $request->file('gambar_produk');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('images/produk'), $filename);
            $request->merge(['gambar_produk' => $filename]);
            $data['gambar_produk'] = $filename;
        }

        Produk::create($data);

        return redirect()->route('produk.index')->with('success', 'Produk created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        $kategori = Kategori::all();
        return view('admin.produk.edit', compact('produk', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga_produk' => 'required|numeric',
            'stok_produk' => 'required|integer',
            'gambar_produk' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi_produk' => 'nullable|string',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);

        $data = $request->except('gambar_produk');

        if ($request->hasFile('gambar_produk')) {
            $file = $request->file('gambar_produk');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('images/produk'), $filename);
            $data['gambar_produk'] = $filename;
        }

        $produk->update($data);

        return redirect()->route('produk.index')->with('success', 'Produk updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        $produk->delete();
        return redirect()->route('produk.index')->with('success', 'Produk deleted successfully.');
    }
}