<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $makanan = Makanan::all();

        return view('makanan.index', compact('makanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('makanan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validateData = $request->validate([

            'nama_makanan' => 'required',
            'kategori_makanan' => 'required',
            'harga_makanan' => 'required',
            'deskripsi' => 'required'
        ]);

        Makanan::create($validateData, [
            'nama_makanan'     => $request->nama_makanan,
            'kategori_makanan'   => $request->kategori_makanan,
            'harga_makanan'   => $request->harga_makanan,
            'deskripsi'   => $request->deskripsi
        ]);

        return to_route('makanan.index');

        // $this->validate($request, [
        //     'nama_makanan'     => 'required',
        //     'kategori_makanan'   => 'required',
        //     'harga_makanan'   => 'required',
        //     'deskripsi'   => 'required',
        //     'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        // ]);

        // //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/template/assets/images/dashboard', $image->hashName());

        // //create post
        // Makanan::create([
        //     'nama_makanan'     => $request->nama_makanan,
        //     'kategori_makanan'   => $request->kategori_makanan,
        //     'harga_makanan'   => $request->harga_makanan,
        //     'deskripsi'   => $request->deskripsi,
        //     'image'     => $image->hashName()
        // ]);

        // //redirect to index
        // return redirect()->route('makanan.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Makanan $makanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Makanan $makanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Makanan $makanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Makanan $makanan)
    {
        //
    }
}
