<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\penjaga;
class PenjagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = penjaga::all();
        return View('penjaga.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('penjaga.create');
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
            'nama_penjaga'=>'required|max:255',
            'umur'=>'required|min:2',
            'alamat'=>'required|min:2',
            'shift'=>'required|min:1',
            'gaji'=>'required|min:2',
        ]);

        $posts = new penjaga;
        $posts->nama_penjaga = $request->nama_penjaga;
        $posts->umur = $request->umur;
        $posts->alamat = $request->alamat;
        $posts->shift = $request->shift;
        $posts->gaji = $request->gaji;
        $posts->save();
        return redirect()->route('penjaga.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = penjaga::findOrFail($id);
        return view('penjaga.show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = penjaga::findOrFail($id);
        return View('penjaga.edit',compact('posts'));
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
            'nama_penjaga'=>'required|max:255',
            'umur'=>'required|min:2',
            'alamat'=>'required|min:2',
            'shift'=>'required|min:1',
            'gaji'=>'required|min:2',
        ]);

        $posts = penjaga::findOrFail($id);
        $posts->nama_penjaga = $request->nama_penjaga;
        $posts->umur = $request->umur;
        $posts->alamat = $request->alamat;
        $posts->shift = $request->shift;
        $posts->gaji = $request->gaji;
        $posts->save();
        return redirect()->route('penjaga.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = penjaga::findOrFail($id);
        $posts->delete();
        return redirect()->route('penjaga.index');
    }
}
