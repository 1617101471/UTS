<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pemesanan;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = pemesanan::all();
        return View('pemesanan.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('pemesanan.create');
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
            'kode_barang'=>'required|unique:pemesanans|max:255',
            'nama_barang'=>'required|min:2',
            'tanggal_pembayaran'=>'required|min:2',
            'satuan'=>'required|min:1',
            'harga_minta'=>'required|min:2',
        ]);

        $posts = new pemesanan;
        $posts->kode_barang = $request->kode_barang;
        $posts->nama_barang = $request->nama_barang;
        $posts->tanggal_pembayaran = $request->tanggal_pembayaran;
        $posts->satuan = $request->satuan;
        $posts->harga_minta = $request->harga_minta;
        $posts->save();
        return redirect()->route('pemesanan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = pemesanan::findOrFail($id);
        return View('pemesanan.show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = pemesanan::findOrFail($id);
        return View('pemesanan.edit',compact('posts'));
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
            'tanggal_pembayaran'=>'required|min:2',
            'satuan'=>'required|min:1',
            'harga_minta'=>'required|min:2',
        ]);

        $posts = pemesanan::findOrFail($id);
        $posts->kode_barang = $request->kode_barang;
        $posts->nama_barang = $request->nama_barang;
        $posts->tanggal_pembayaran = $request->tanggal_pembayaran;
        $posts->satuan = $request->satuan;
        $posts->harga_minta = $request->harga_minta;
        $posts->save();
        return redirect()->route('pemesanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = pemesanan::findOrFail($id);
        $posts->delete();
        return redirect()->route('pemesanan.index');
    }
}
