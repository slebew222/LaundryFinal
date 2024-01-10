<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Requests\UpdateCucisatuanRequest;
use App\Models\Cucikomplit;
use App\Models\Cucisatuan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CucisatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.cucisatuan');
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
        Cucisatuan::create($validation);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cucisatuan $cucisatuan)
    {
        return view('Detailorder.layouts.Detailorder',[
            'data'=>$cucisatuan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cucisatuan $cucisatuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCucisatuanRequest $request, Cucisatuan $cucisatuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        Cucisatuan::destroy($id);
       return redirect('homepage');
    }
}
