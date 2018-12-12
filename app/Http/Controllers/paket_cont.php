<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket_model;

class paket_cont extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Paket_model::all();
        return view('paket', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('paket_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Paket_model();
        $data->nama_paket = $request->nama;
        $data->harga_paket = $request->harga;
        $data->save();
        return redirect()->route('paket.index')->with('alert-success','Berhasil Menambahkan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $data = Paket_model::findOrFail($id);
        return view('paket_edit',compact('data'));
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
        $data = Paket_model::where('id',$id)->first();
        $data->nama_paket = $request->nama;
        $data->harga_paket = $request->harga;
        $data->save();
        return redirect()->route('paket.index')->with('alert-success','Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Paket_model::where('id',$id)->first();
        $data->delete();
        return redirect()->route('paket.index')->with('alert-success','Data berhasil dihapus!');
    }
}
