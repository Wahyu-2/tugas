<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListProduk;

class ListController extends Controller
{
    public function index()
    {
        $produk = ListProduk::latest()->get();
        return view('list.index', compact('produk'));
    }

    public function create()
    {
        return view('list.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required'
        ]);

        ListProduk::create($request->all());
        return redirect()->route('list.index')->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit($id)
    {
        $produk = ListProduk::findOrFail($id);
        return view('list.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required'
        ]);

        $produk = ListProduk::findOrFail($id);
        $produk->update($request->all());
        return redirect()->route('list.index')->with('success', 'Produk berhasil diperbarui');
    }

    public function destroy($id)
    {
        try {
            $produk = ListProduk::findOrFail($id);
            $namaProduk = $produk->nama;
            $produk->delete();
            return redirect()->route('list.index')->with('success', "Produk '{$namaProduk}' berhasil dihapus");
        } catch (\Exception $e) {
            return redirect()->route('list.index')->with('error', 'Gagal menghapus produk');
        }
    }
}