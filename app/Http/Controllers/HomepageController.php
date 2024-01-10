<?php

namespace App\Http\Controllers;

use App\Models\Cucikomplit;
use App\Models\Cucisatuan;
use App\Models\Dryclean;
use App\Models\User;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cucikomplit=Cucikomplit::all();
        $cucisatuan=Cucisatuan::all();
        $dryclean=Dryclean::all();
        $User=User::all();
        return view('layouts.homepages',[
            'cucikomplit'=> $cucikomplit,
            'cucisatuan'=>$cucisatuan,
            'dryclean'=>$dryclean,
            'user'=>$User
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
