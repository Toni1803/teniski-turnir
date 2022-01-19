<?php

namespace App\Http\Controllers;

use App\Models\Rezultat;
use Illuminate\Http\Request;

class RezultatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rezultati=Rezultat::all();
        return view('rezultati.index', ['rezultati' => $rezultati]);
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
     * @param  \App\Models\Rezultat  $rezultat
     * @return \Illuminate\Http\Response
     */
    public function show(Rezultat $rezultat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rezultat  $rezultat
     * @return \Illuminate\Http\Response
     */
    public function edit(Rezultat $rezultat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rezultat  $rezultat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rezultat $rezultat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rezultat  $rezultat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rezultat $rezultat)
    {
        $rezultat->delete();
        return redirect()->back();
    }
}
