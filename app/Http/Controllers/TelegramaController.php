<?php

namespace App\Http\Controllers;

use App\Models\telegrama;
use Illuminate\Http\Request;

class TelegramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $csvFile = fopen(base_path("database/data/data.csv"), "r");
      //dd( count($data = fgetcsv($csvFile, 0, ",")));

     
  
     
        return view('telegrama/telegrama2', compact('csvFile'));
        //
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
     * @param  \App\Models\telegrama  $telegrama
     * @return \Illuminate\Http\Response
     */
    public function show(telegrama $telegrama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\telegrama  $telegrama
     * @return \Illuminate\Http\Response
     */
    public function edit(telegrama $telegrama)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\telegrama  $telegrama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, telegrama $telegrama)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\telegrama  $telegrama
     * @return \Illuminate\Http\Response
     */
    public function destroy(telegrama $telegrama)
    {
        //
    }
}
