<?php

namespace App\Http\Controllers;

use App\choferes;
use Illuminate\Http\Request;

class ChoferesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('choferes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('choferes.create');
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
        $datosChofer=request()->all();
        return response()->json($datosChofer);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\choferes  $choferes
     * @return \Illuminate\Http\Response
     */
    public function show(choferes $choferes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\choferes  $choferes
     * @return \Illuminate\Http\Response
     */
    public function edit(choferes $choferes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\choferes  $choferes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, choferes $choferes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\choferes  $choferes
     * @return \Illuminate\Http\Response
     */
    public function destroy(choferes $choferes)
    {
        //
    }
}
