<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\supplier;
class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = supplier::all();
        return View('supplier.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('supplier.create');
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
            'kode_barang'=>'required|unique:suppliers|max:255',
            'nama_barang'=>'required|min:2',
            'alamat'=>'required|min:2',
            'perusahaan'=>'required|min:1',
            'no_telepon'=>'required|min:2',
        ]);

        $posts = new supplier;
        $posts->kode_barang = $request->kode_barang;
        $posts->nama_barang = $request->nama_barang;
        $posts->alamat = $request->alamat;
        $posts->perusahaan = $request->perusahaan;
        $posts->no_telepon = $request->no_telepon;
        $posts->save();
        return redirect()->route('supplier.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = supplier::findOrFail($id);
        return View('supplier.show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = supplier::findOrFail($id);
        return View('supplier.edit',compact('posts'));
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
            'alamat'=>'required|min:2',
            'perusahaan'=>'required|min:1',
            'no_telepon'=>'required|min:2',
        ]);

        $posts = supplier::findOrFail($id);
        $posts->kode_barang = $request->kode_barang;
        $posts->nama_barang = $request->nama_barang;
        $posts->alamat = $request->alamat;
        $posts->perusahaan = $request->perusahaan;
        $posts->no_telepon = $request->no_telepon;
        $posts->save();
        return redirect()->route('supplier.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = supplier::findOrFail($id);
        $posts->delete();
        return redirect()->route('supplier.index');
    }
}
