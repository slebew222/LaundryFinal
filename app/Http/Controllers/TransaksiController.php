<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Cucisatuan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTransaksiRequest;
use App\Http\Requests\UpdateTransaksiRequest;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // dd($request);
    $validation=$request->validate([
            'nama_pelanggan'=>'required',
            'no_telepon'=>'required',
            'alamat'=>'required',
            'jenis_paket'=>'required',
            'order_masuk'=>'required',
            'order_keluar'=>'required',
            'waktu_kerja'=>'required',
            'keterangan'=>'required',
            'harga'=>'required',
            'total'=>'required',
            'pembayaran'=>'required'
        ]);
// dd("mantap");
        $validation['no_order']=1;

// $startTime = Carbon::parse($validation['order_masuk']);
// $finishTime = Carbon::parse($validation['order_keluar']);
// $validation['waktu_kerja'] = $finishTime->diffForHumans($startTime);
// dd($validation['waktu_kerja']);
        // $validation['waktu_kerja']=$validation['order_keluar'] - $validation['order_masuk'];
        if ($validation['pembayaran']>=$validation['total']) {
            $validation['status']=True;

            Transaksi::create($validation);
            return redirect('homepage');
        } else {
            $validation['status']=False;
            return redirect()->back();
            # code...
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransaksiRequest $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
