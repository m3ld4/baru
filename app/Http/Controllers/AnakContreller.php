<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\anak;
use App\keluarga;
class AnakContreller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $anak=anak::all();
          return view('anak.index', compact('anak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
         $kelu=keluarga::all();
         return view('anak.create', compact('kelu'));
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
         $anak = new anak;
        $anak ->nama= $request->a;
        $anak ->keluarga_id= $request->b;
        $anak ->umur= $request->c;
        $anak ->alamat = $request->e;
        $anak -> save();
        return redirect('anak');
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
        $kelu=keluarga::all();
        $anak=anak::findOrfail($id);
        return view('anak.show', compact('anak','kelu'));
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
        $anak=anak::findOrfail($id);
        $kelu=keluarga::all();
        return view('anak.update', compact('anak','kelu'));
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
        $anak = anak::findOrfail($id);
        $anak ->nama = $request->a;
        $anak ->keluarga_id = $request->b;
        $anak ->umur = $request->c;
        $anak ->alamat = $request->e;
        $anak -> save();
        return redirect('anak');
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
        $anak=anak::findOrfail($id);
      $anak->delete();
      return redirect('anak');
    }
}
