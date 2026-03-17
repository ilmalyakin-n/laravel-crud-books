<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255|min:3',
            'pengarang' => 'required|string|max:255|min:3',
            'tahun_terbit' => 'required|integer|min:1900|max:' . date('Y'),
        ]);
        Buku::create($validatedData);
        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    public function edit(string $id)
    {
        $bukuDetail = Buku::findOrFail($id);
        $buku = Buku::all();
        return view('buku.index', compact('buku', 'bukuDetail'));
    }

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255|min:3',
            'pengarang' => 'required|string|max:255|min:3',
            'tahun_terbit' => 'required|integer|min:1900|max:' . date('Y'),
        ]);
        Buku::where('id', $id)->update($validatedData);
        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbaharui.');
    }

    public function destroy(string $id)
    {
        $bukuDetail = Buku::findOrFail($id);
        $bukuDetail->delete();
        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus.');
    }
}
