<?php

namespace App\Http\Controllers;

use App\Models\Mec;
use Illuminate\Http\Request;

class MecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mecevi=Mec::all();
        return view('mecevi.index', ['mecevi' => $mecevi]);
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
     * @param  \App\Models\Mec  $mec
     * @return \Illuminate\Http\Response
     */
    public function show(Mec $mec)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mec  $mec
     * @return \Illuminate\Http\Response
     */
    public function edit(Mec $mec)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mec  $mec
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mec $mec)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mec  $mec
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mec $mec)
    {
        $mec->delete();
        return redirect()->back();
    }
}
