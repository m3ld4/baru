<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\keluarga;

class KeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
          //
          $kelu=keluarga::with('anak')->get();
          return view('keluarga.index', compact('kelu'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('keluarga.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kelu = new keluarga;
        $kelu ->nama_ayah= $request->a;
        $kelu ->nama_ibu= $request->b;
        $kelu ->umur_ayah= $request->c;
        $kelu ->umur_ibu = $request->d;
        $kelu ->alamat = $request->e;
        $kelu -> save();
        return redirect('keluarga');
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
        $kelu=keluarga::findOrfail($id);
        return view('keluarga.show', compact('kelu'));
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
         $kelu=keluarga::findOrfail($id);
        return view('keluarga.edit', compact('kelu'));
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
         $kelu = keluarga::findOrfail($id);
        $kelu ->nama_ayah = $request->a;
        $kelu ->nama_ibu = $request->b;
        $kelu ->umur_ayah = $request->c;
        $kelu ->umur_ibu = $request->d;
        $kelu ->alamat = $request->e;
        $kelu -> save();
        return redirect('keluarga');
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
      $kelu=keluarga::findOrfail($id);
      $kelu->delete();
      return redirect('keluarga');
    }
}
