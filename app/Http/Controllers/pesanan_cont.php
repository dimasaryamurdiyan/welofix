<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataLaundry_model;

class pesanan_cont extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DataLaundry_model::all();
        return view('pesanan',compact('data'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('pesanan_create');
    }

    public function showcust(){
        $data = DataLaundry_model::select('cust_num','cust_name','total_payment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new DataLaundry_model();
        $data->cust_name = $request->nama;
        $data->cust_num = $request->nomor;
        $data->kg_laundry = $request->berat;
        $data->pcs_laundry = $request->berang;
        $data->type_laundry = $request->jenis_paket;
        $data->dateIn = $request->tgl_masuk;
        $data->dateDone = $request->tgl_selesai;
        $data->dateTaken = $request->tgl_ambil;
        $data->total_payment = $request->total;
        $data->payment_stats = $request->status_pem;
        $data->idPetugas = rand(2,10);
        $data->save();
        return redirect()->route('user.index')->with('alert-success','Berhasil Menambahkan Data Admin!');
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
        $data = DataLaundry_model::where('id',$id)->get();
        return view('pesanan_edit',compact('data'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = DataLaundry_model::where('id',$id)->first();
        $data->cust_name = $request->nama;
        $data->cust_num = $request->nomor;
        $data->kg_laundry = $request->berat;
        $data->pcs_laundry = $request->berang;
        $data->type_laundry = $request->jenis_paket;
        $data->dateIn = $request->tgl_masuk;
        $data->dateDone = $request->tgl_selesai;
        $data->dateTaken = $request->tgl_ambil;
        $data->total_payment = $request->total;
        $data->payment_stats = $request->status_pem;
        $data->idPetugas = rand(2,10);
        $data->save();
        return redirect()->route('pesanan.index')->with('alert-success','Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DataLaundry_model::where('id',$id)->first();
        $data->delete();
        return redirect()->route('pesanan.index')->with('alert-success','Data berhasil dihapus!');
    }
}
