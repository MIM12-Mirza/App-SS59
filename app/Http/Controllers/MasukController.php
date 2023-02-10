<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masuk;
use App\Models\Obat;

class MasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $masuk   = Masuk::all();
        return view('masuk.index',compact('nomor','masuk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $obat = Obat::all();
        return view('masuk.form', compact('obat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $masuk = new Masuk;

        $masuk->kode = $request->kode;
        $masuk->jenis_obat = $request->jenis_obat;
        $masuk->harga = $request->harga;
        $masuk->tanggal_masuk = $request->tanggal;
        $masuk->obats_id = $request->obat;
        $masuk->foto = "default.jpg";
        $masuk->save();

        return redirect('/masuk');
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
        $masuk  = Masuk::find($id);
        $obat   = Obat::all();
        return view('masuk.edit',compact('masuk','obat'));
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
        $masuk =  Masuk::find($id);

        $masuk->kode = $request->kode;
        $masuk->jenis_obat = $request->jenis_obat;
        $masuk->harga = $request->harga;
        $masuk->tanggal_masuk = $request->tanggal;
        $masuk->obats_id = $request->obat;
        $masuk->foto = "default.jpg";
        $masuk->save();

        return redirect('/masuk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $masuk = Masuk::find($id);
        $masuk->delete();

        return redirect('/masuk');
    }
}
