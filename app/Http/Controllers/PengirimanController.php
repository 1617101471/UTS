<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengiriman;
class PengirimanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = pengiriman::all();
        return View('pengiriman.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('pengiriman.create');
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
            'kode_barang'=>'required|unique:pengirimen|max:255',
            'tanggal_pengiriman'=>'required|min:2',
            'tanggal_penerima'=>'required|min:2',
            'alamat'=>'required|min:1',
            'cara_bayar'=>'required|min:2',
        ]);

        $posts = new pengiriman;
        $posts->kode_barang = $request->kode_barang;
        $posts->tanggal_pengiriman = $request->tanggal_pengiriman;
        $posts->tanggal_penerima = $request->tanggal_penerima;
        $posts->alamat = $request->alamat;
        $posts->cara_bayar = $request->cara_bayar;
        $posts->save();
        return redirect()->route('pengiriman.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = pengiriman::findOrFail($id);
        return View('pengiriman.show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = pengiriman::findOrFail($id);
        return View('pengiriman.edit',compact('posts'));
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
            'tanggal_pengiriman'=>'required|min:2',
            'tanggal_penerima'=>'required|min:2',
            'alamat'=>'required|min:1',
            'cara_bayar'=>'required|min:2',
        ]);

        $posts = pengiriman::findOrFail($id);
        $posts->kode_barang = $request->kode_barang;
        $posts->tanggal_pengiriman = $request->tanggal_pengiriman;
        $posts->tanggal_penerima = $request->tanggal_penerima;
        $posts->alamat = $request->alamat;
        $posts->cara_bayar = $request->cara_bayar;
        $posts->save();
        return redirect()->route('pengiriman.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = pengiriman::findOrFail($id);
        $posts->delete();
        return redirect()->route('pengiriman.index');
    }
}
