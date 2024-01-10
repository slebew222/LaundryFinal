<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCucikeringRequest;
use App\Http\Requests\UpdateCucikeringRequest;
use App\Models\Cucikering;
use App\Models\Dryclean;
use App\Models\Cucikomplit;
use Illuminate\Support\Carbon;

class CucikeringController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.cucikering');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCucikeringRequest $request)
    {
        $validation=$request->validate([
            'nama_pelanggan'=>'required',
            'no_telepon'=>'required',
            'alamat'=>'required',
            'berat'=>'required',
            'jenis_paket'=>'required',
            'order_masuk'=>'required',
            'order_keluar'=>'required',
            'keterangan'=>'required',


        ]);

        $validation['no_order']=1;

$startTime = Carbon::parse($validation['order_masuk']);
$finishTime = Carbon::parse($validation['order_keluar']);
$validation['waktu_kerja'] = $finishTime->diffForHumans($startTime);
// dd($validation['waktu_kerja']);
        // $validation['waktu_kerja']=$validation['order_keluar'] - $validation['order_masuk'];
        Cucikering::create($validation);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cucikering $id)
    {
        $id=Cucikering::find($id);
        return view('Detailorder.layouts.Detailorder',[
            'data'=>$id,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cucikering $cucikering)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCucikeringRequest $request, Cucikering $cucikering)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        Dryclean::destroy($id);
        return redirect('/homepage');
    }
}
