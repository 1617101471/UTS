<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = transaksi::all();
        return View('transaksi.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('transaksi.create');
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
            'kode_barang'=>'required|unique:transaksis|max:255',
            'nama_barang'=>'required|min:2',
            'tanggal_beli'=>'required|min:2',
            'satuan'=>'required|min:1',
            'harga'=>'required|min:2',
        ]);

        $posts = new transaksi;
        $posts->kode_barang = $request->kode_barang;
        $posts->nama_barang = $request->nama_barang;
        $posts->tanggal_beli = $request->tanggal_beli;
        $posts->satuan = $request->satuan;
        $posts->harga = $request->harga;
        $posts->save();
        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = transaksi::findOrFail($id);
        return View('transaksi.show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = transaksi::findOrFail($id);
        return View('transaksi.edit',compact('posts'));
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
            'tanggal_beli'=>'required|min:2',
            'satuan'=>'required|min:1',
            'harga'=>'required|min:2',
        ]);

        $posts = transaksi::findOrFail($id);
        $posts->kode_barang = $request->kode_barang;
        $posts->nama_barang = $request->nama_barang;
        $posts->tanggal_beli = $request->tanggal_beli;
        $posts->satuan = $request->satuan;
        $posts->harga = $request->harga;
        $posts->save();
        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = transaksi::findOrFail($id);
        $posts->delete();
        return redirect()->route('transaksi.index');
    }
}
