<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\penjualan;
class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = penjualan::all();
        return View('penjualan.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('penjualan.create');
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
            'kode_barang'=>'required|unique:penjualans|max:255',
            'nama_barang'=>'required|min:2',
            'satuan'=>'required|min:2',
            'sisa_stok'=>'required|min:1',
            'harga_jual'=>'required|min:2',
        ]);

        $posts = new penjualan;
        $posts->kode_barang = $request->kode_barang;
        $posts->nama_barang = $request->nama_barang;
        $posts->satuan = $request->satuan;
        $posts->sisa_stok = $request->sisa_stok;
        $posts->harga_jual = $request->harga_jual;
        $posts->save();
        return redirect()->route('penjualan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = penjualan::findOrFail($id);
        return View('penjualan.show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = penjualan::findOrFail($id);
        return View('penjualan.edit',compact('posts'));
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
            'satuan'=>'required|min:2',
            'sisa_stok'=>'required|min:1',
            'harga_jual'=>'required|min:2',
        ]);

        $posts = penjualan::findOrFail($id);
        $posts->kode_barang = $request->kode_barang;
        $posts->nama_barang = $request->nama_barang;
        $posts->satuan = $request->satuan;
        $posts->sisa_stok = $request->sisa_stok;
        $posts->harga_jual = $request->harga_jual;
        $posts->save();
        return redirect()->route('penjualan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = penjualan::findOrFail($id);
        $posts->delete();
        return redirect()->route('penjualan.index');
    }
}
