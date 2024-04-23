<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Minuman;

class minumanController extends Controller
{
    public function index()
    {
        $minuman = Minuman::all();
        return view('minuman.minuman', compact('minuman'));
    }

    public function create()
    {
        return view('minuman.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([

            'nama_minuman' => 'required',
            'kategori_minuman' => 'required',
            'harga_minuman' => 'required',
            'stok' => 'required'
        ]);

        Minuman::create($validateData, [
            'nama_minuman'     => $request->nama_minuman,
            'kategori_minuman'   => $request->kategori_minuman,
            'harga_minuman'   => $request->harga_minuman,
            'stok'   => $request->stok
        ]);

        return redirect()->route('minuman.minuman')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
