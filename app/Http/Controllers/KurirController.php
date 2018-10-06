<?php

namespace App\Http\Controllers;
use App\Kurir;
use Illuminate\Http\Request;

class KurirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kurir=Kurir::all();
        return view('kurir',compact('kurir'));
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
        $data =  new Kurir();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->no_hp = $request->no_hp;
        $data->status = $request->status;
        $data->penghasilan = 0;
        $data->user_id = $request->user_id;
        $gambar = $request->file('foto');
        if(empty($gambar)){
           $namaFile = "null";
        }else{
            $namaFile = $gambar->getClientOriginalName();
            $request->file('foto')->move('img', $namaFile);
        }
        $data->foto = $namaFile;
        $data->save();
        return redirect()->route('kurir.index');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = kurir::where('id',$id)->first();
        $data->delete();
        return redirect()->route('kurir.index');
    }
}
