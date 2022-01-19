<?php

namespace App\Http\Controllers;

use App\Models\Turnir;
use Illuminate\Http\Request;

class TurnirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turniri=Turnir::with(['kategorija_turnira'])->get();
        $turniri=Turnir::with(['rezultat'])->get();
        return view('turniri.index', ['turniri' => $turniri]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Turnir  $turnir
     * @return \Illuminate\Http\Response
     */
    public function show(Turnir $turnir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Turnir  $turnir
     * @return \Illuminate\Http\Response
     */
    public function edit(Turnir $turnir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Turnir  $turnir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turnir $turnir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Turnir  $turnir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turnir $turnir)
    {
        $turnir->delete();
        return redirect()->back();
    }
}
