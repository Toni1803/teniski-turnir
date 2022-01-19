<?php

namespace App\Http\Controllers;

use App\Models\Igra;
use Illuminate\Http\Request;

class IgraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $igre=Igra::all();
        return view('igre.index', ['igre' => $igre]);
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
     * @param  \App\Models\Igra  $igra
     * @return \Illuminate\Http\Response
     */
    public function show(Igra $igra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Igra  $igra
     * @return \Illuminate\Http\Response
     */
    public function edit(Igra $igra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Igra  $igra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Igra $igra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Igra  $igra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Igra $igra)
    {
        $igra->delete();
        return redirect()->back();
    }
}
