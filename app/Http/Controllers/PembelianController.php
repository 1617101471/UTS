<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pembelian;
class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = pembelian::all();
        return View('pembelian.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('pembelian.create');
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
            'nama_pembeli'=>'required|max:255',
            'nama_barang'=>'required|min:2',
            'alamat'=>'required|min:2',
            'satuan'=>'required|min:1',
            'harga'=>'required|min:2',
        ]);

        $posts = new pembelian;
        $posts->nama_pembeli = $request->nama_pembeli;
        $posts->nama_barang = $request->nama_barang;
        $posts->alamat = $request->alamat;
        $posts->satuan = $request->satuan;
        $posts->harga = $request->harga;
        $posts->save();
        return redirect()->route('pembelian.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = pembelian::findOrFail($id);
        return View('pembelian.show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = pembelian::findOrFail($id);
        return View('pembelian.edit',compact('posts'));
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
            'nama_pembeli'=>'required|max:255',
            'nama_barang'=>'required|min:2',
            'alamat'=>'required|min:2',
            'satuan'=>'required|min:1',
            'harga'=>'required|min:2',
        ]);

        $posts = pembelian::findOrFail($id);
        $posts->nama_pembeli = $request->nama_pembeli;
        $posts->nama_barang = $request->nama_barang;
        $posts->alamat = $request->alamat;
        $posts->satuan = $request->satuan;
        $posts->harga = $request->harga;
        $posts->save();
        return redirect()->route('pembelian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = pembelian::findOrFail($id);
        $posts->delete();
        return redirect()->route('pembelian.index');
    }
}
