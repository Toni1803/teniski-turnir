<?php

namespace App\Http\Controllers;

use App\Models\Igrac;
use Illuminate\Http\Request;

class IgracController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $igraci=Igrac::all();
        return view('igraci.index', ['igraci' => $igraci]);
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
     * @param  \App\Models\Igrac  $igrac
     * @return \Illuminate\Http\Response
     */
    public function show(Igrac $igrac)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Igrac  $igrac
     * @return \Illuminate\Http\Response
     */
    public function edit(Igrac $igrac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Igrac  $igrac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Igrac $igrac)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Igrac  $igrac
     * @return \Illuminate\Http\Response
     */
    public function destroy(Igrac $igrac)
    {
        $igrac->delete();
        return redirect()->back();
    }
}
