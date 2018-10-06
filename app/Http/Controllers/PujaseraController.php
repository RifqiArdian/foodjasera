<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Kurir;
use App\PenghasilanPuja;
class PujaseraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kurir=Kurir::all();
        $penghasilanPuja=PenghasilanPuja::all();
        return view('pujasera',compact('penghasilanPuja','kurir'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $data=User::where('id',$id)->first();
        $data->name=$request->name;
        $data->alamat=$request->alamat;
        $data->deskripsi=$request->deskripsi;
        $data->jumlah_kedai=$request->jumlah_kedai;
        $data->longitude=$request->longitude;
        $data->latitude=$request->latitude;
        $data->status=$request->status;
        $data->email=$request->email;
        $data->no_hp=$request->no_hp;
        $gambar = $request->file('foto');
        if(empty($gambar)){
           $namaFile = "null";
        }else{
            $namaFile = $gambar->getClientOriginalName();
            $request->file('foto')->move('img', $namaFile);
        }
        $data->foto = $namaFile;
        $data->save();
        return redirect()->route('pujasera.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
