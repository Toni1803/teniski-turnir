<?php

namespace App\Http\Controllers;

use App\Models\Kategorija_turnira;
use Illuminate\Http\Request;

class KategorijaTurniraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategorije_turnira=Kategorija_turnira::all();
        return view('kategorije_turnira.index', ['kategorije_turnira' => $kategorije_turnira]);
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
     * @param  \App\Models\Kategorija_turnira  $kategorija_turnira
     * @return \Illuminate\Http\Response
     */
    public function show(Kategorija_turnira $kategorija_turnira)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategorija_turnira  $kategorija_turnira
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategorija_turnira $kategorija_turnira)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategorija_turnira  $kategorija_turnira
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategorija_turnira $kategorija_turnira)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategorija_turnira  $kategorija_turnira
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategorija_turnira $kategorija_turnira)
    {
        $kategorija_turnira->delete();
        return redirect()->back();
    }
}
