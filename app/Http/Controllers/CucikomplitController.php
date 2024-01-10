<?php

namespace App\Http\Controllers;

use App\Models\Cucikomplit;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CucikomplitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.cucikomplit');
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

        $validation['no_order']=1;

$startTime = Carbon::parse($validation['order_masuk']);
$finishTime = Carbon::parse($validation['order_keluar']);
$validation['waktu_kerja'] = $finishTime->diffForHumans($startTime);
// dd($validation['waktu_kerja']);
        // $validation['waktu_kerja']=$validation['order_keluar'] - $validation['order_masuk'];
        Cucikomplit::create($validation);
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $id=Cucikomplit::find($id);
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
        Cucikomplit::destroy($id);
        return redirect('/homepage');
    }
}
