<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\karyawan;
class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = karyawan::all();
        return view('karyawan.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.create');
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
            'nik'=>'required|unique:karyawans|max:255',
            'nama_karyawan'=>'required|min:2',
            'bagian'=>'required|min:2',
            'status'=>'required|min:2',
            'penghasilan'=>'required|min:2',
        ]);

        $posts = new karyawan;
        $posts->nik = $request->nik;
        $posts->nama_karyawan = $request->nama_karyawan;
        $posts->bagian = $request->bagian;
        $posts->status = $request->status;
        $posts->penghasilan = $request->penghasilan;
        $posts->save();
        return redirect()->route('karyawan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = karyawan::findOrfail($id);
        return view('karyawan.show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = karyawan::findOrfail($id);
        return view('karyawan.edit',compact('posts'));
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
            'nik'=>'required|max:255',
            'nama_karyawan'=>'required|min:2',
            'bagian'=>'required|min:2',
            'status'=>'required|min:2',
            'penghasilan'=>'required|min:2',
        ]);

        $posts = karyawan::findOrfail($id);
        $posts->nik = $request->nik;
        $posts->nama_karyawan = $request->nama_karyawan;
        $posts->bagian = $request->bagian;
        $posts->status = $request->status;
        $posts->penghasilan = $request->penghasilan;
        $posts->save();
        return redirect()->route('karyawan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = karyawan::findOrFail($id);
        $posts->delete();
        return redirect()->route('karyawan.index');
    }
}
