<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\stok_barang;
class StokbarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = stok_barang::all();
        return View('stok.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stok.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'kode_barang'=>'required|unique:stok_barangs|max:255',
            'nama_barang'=>'required|min:2',
            'stok'=>'required|min:2',
            'tanggal_export'=>'required|min:1',
            'harga_jual'=>'required|min:2',
        ]);

        $posts = new stok_barang;
        $posts->kode_barang = $request->kode_barang;
        $posts->nama_barang = $request->nama_barang;
        $posts->stok = $request->stok;
        $posts->tanggal_export = $request->tanggal_export;
        $posts->harga_jual = $request->harga_jual;
        $posts->save();
        return redirect()->route('stok.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = stok_barang::findOrFail($id);
        return view('stok.show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = stok_barang::findOrFail($id);
        return View('stok.edit',compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'kode_barang'=>'required|max:255',
            'nama_barang'=>'required|min:2',
            'stok'=>'required|min:2',
            'tanggal_export'=>'required|min:1',
            'harga_jual'=>'required|min:2',
        ]);

        $posts = stok_barang::findOrFail($id);
        $posts->kode_barang = $request->kode_barang;
        $posts->nama_barang = $request->nama_barang;
        $posts->stok = $request->stok;
        $posts->tanggal_export = $request->tanggal_export;
        $posts->harga_jual = $request->harga_jual;
        $posts->save();
        return redirect()->route('stok.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = stok_barang::findOrFail($id);
        $posts->delete();
        return redirect()->route('stok.index');
    }
}
