<?php

namespace App\Http\Controllers;

use App\taller_mecanico;
use Illuminate\Http\Request;

class TallerMecanicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('taller.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('taller.create');
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
        $datosTaller=request()->all();
        return response()->json($datosTaller);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\taller_mecanico  $taller_mecanico
     * @return \Illuminate\Http\Response
     */
    public function show(taller_mecanico $taller_mecanico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\taller_mecanico  $taller_mecanico
     * @return \Illuminate\Http\Response
     */
    public function edit(taller_mecanico $taller_mecanico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\taller_mecanico  $taller_mecanico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, taller_mecanico $taller_mecanico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\taller_mecanico  $taller_mecanico
     * @return \Illuminate\Http\Response
     */
    public function destroy(taller_mecanico $taller_mecanico)
    {
        //
    }
}
