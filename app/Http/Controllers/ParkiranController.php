<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\parkiran;
class ParkiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = parkiran::all();
        return View('parkiran.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('parkiran.create');
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
            'plat_nomor'=>'required|unique:parkirans|max:255',
            'nama_pemilik'=>'required|min:2',
            'merk_kendaraan'=>'required|min:2',
            'jam_masuk'=>'required|min:2',
            'jam_keluar'=>'required|min:2',
        ]);

        $posts = new parkiran;
        $posts->plat_nomor = $request->plat_nomor;
        $posts->nama_pemilik = $request->nama_pemilik;
        $posts->merk_kendaraan = $request->merk_kendaraan;
        $posts->jam_masuk = $request->jam_masuk;
        $posts->jam_keluar = $request->jam_keluar;
        $posts->save();
        return redirect()->route('parkiran.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = parkiran::findOrFail($id);
        return View('parkiran.show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = parkiran::findOrFail($id);
        return view('parkiran.edit',compact('posts'));
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
            'plat_nomor'=>'required|max:255',
            'nama_pemilik'=>'required|min:2',
            'merk_kendaraan'=>'required|min:2',
            'jam_masuk'=>'required|min:2',
            'jam_keluar'=>'required|min:2',
        ]);

        $posts = parkiran::findOrFail($id);
        $posts->plat_nomor = $request->plat_nomor;
        $posts->nama_pemilik = $request->nama_pemilik;
        $posts->merk_kendaraan = $request->merk_kendaraan;
        $posts->jam_masuk = $request->jam_masuk;
        $posts->jam_keluar = $request->jam_keluar;
        $posts->save();
        return redirect()->route('parkiran.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = parkiran::findOrFail($id);
        $posts->delete();
        return redirect()->route('parkiran.index');
    }
}
