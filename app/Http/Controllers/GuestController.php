<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public static int $counter = 0;
    public function input()
    {
        return view('formulir');
    }

    public function proses(Request $request, int $id)
    {
        echo "</br>Path = " . $request->path();

        echo "</br>request patern == proses* ? " . ($request->is("proses*") ? 'true' : 'false');
        echo "</br>request route name ==  proses-form-guest? " . ($request->routeIs("proses-form-guest") ? 'true' : 'false');

        echo "</br>url = " . $request->url();
        echo "</br>full url = " . $request->fullUrl();

        echo "</br>Query string warna = " . $request->query('warna');

        echo "</br>Method = " . $request->method();
        echo "</br>Method == post? " . ($request->isMethod('post') ? 'true' : 'false');


        echo "</br>Name = " . $request->input('name');
        echo "</br>City = " . $request->input('city');

        echo "</br>Hobby:";
        for ($i = 0; $i < count($request->input('hobby')); $i++) {
            echo '</br>' . $request->input("hobby.$i");
        }
        echo "</br></br> Gambar";
        echo "</br>gambar ada? " . ($request->hasFile('gambar') ? 'true' : 'false');
        echo "</br> Ekstensi = " . $request->gambar->extension();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
