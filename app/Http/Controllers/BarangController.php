<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = barang::all();
        return View('barang.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('barang.create');
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
            'kode_barang'=>'required|unique:barangs|max:255',
            'nama_barang'=>'required|min:2',
            'satuan'=>'required|min:2',
            'harga_beli'=>'required|min:1',
            'harga_jual'=>'required|min:2',
        ]);

        $posts = new barang;
        $posts->kode_barang = $request->kode_barang;
        $posts->nama_barang = $request->nama_barang;
        $posts->satuan = $request->satuan;
        $posts->harga_beli = $request->harga_beli;
        $posts->harga_jual = $request->harga_jual;
        $posts->save();
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = barang::findOrFail($id);
        return View('barang.show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = barang::findOrFail($id);
        return View('barang.edit',compact('posts'));
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
            'harga_beli'=>'required|min:1',
            'harga_jual'=>'required|min:2',
        ]);

        $posts = barang::findOrFail($id);
        $posts->kode_barang = $request->kode_barang;
        $posts->nama_barang = $request->nama_barang;
        $posts->satuan = $request->satuan;
        $posts->harga_beli = $request->harga_beli;
        $posts->harga_jual = $request->harga_jual;
        $posts->save();
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = barang::findOrFail($id);
        $posts->delete();
        return redirect()->route('barang.index');
    }
}
