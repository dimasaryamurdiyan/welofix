<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_model;

class user_cont extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = user_model::all();
        return view('user',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new user_model();
        $data->name = $request->nama;
        $data->username = $request->username;
        $data->passsword = $request->password;
        $data->DoB = $request->DoB;
        $data->status = $request->status;
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
        $data = user_model::where('id',$id)->get();
        return view('user_edit',compact('data'));
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
        $data = user_model::where('id',$id)->first();
        $data->name = $request->nama;
        $data->username = $request->username;
        $data->passsword = $request->password;
        $data->DoB = $request->DoB;
        $data->status = $request->status;
        $data->save();
        return redirect()->route('user.index')->with('alert-success','Berhasil Mengubah Data Admin!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = user_model::where('id',$id)->first();
        $data->delete();
        return redirect()->route('user.index')->with('alert-success','Data berhasil dihapus!');
    }
}