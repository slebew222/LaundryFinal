<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cucikomplit;
use App\Models\Dryclean;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DrycleanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.dryclean');
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
    public function store(Request $request)
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
// dd('masuk');
        $validation['no_order']=1;

$startTime = Carbon::parse($validation['order_masuk']);
$finishTime = Carbon::parse($validation['order_keluar']);
$validation['waktu_kerja'] = $finishTime->diffForHumans($startTime);
// dd($validation['waktu_kerja']);
        // $validation['waktu_kerja']=$validation['order_keluar'] - $validation['order_masuk'];
        Dryclean::create($validation);
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
$id=Dryclean::find($id);
// dd($id);
        return view('Detailorder.layouts.Detailorder',[
            'data'=>$id,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       Dryclean::destroy($id);
       return redirect('homepage');
    }
}
