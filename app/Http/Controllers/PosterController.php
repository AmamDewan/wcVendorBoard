<?php

namespace App\Http\Controllers;

use App\Poster;
use Illuminate\Http\Request;
use Anam\PhantomMagick\Converter;
class PosterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('poster.index');
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
     * Display poster on webpage.
     *
     * @param  \App\Poster $poster
     * @return \Illuminate\Http\Response
     */

    public function getPoster(Poster $poster)
    {

        $results = (new Poster)->getinfo();
        return view('poster.covid-poster', compact('results'));
    }

    /**
     * Generate image from poster.
     *
     * @return \Illuminate\Http\Response
     */

    public function generate()
    {
        $options = [
            'width' => 1200,
            'height' => 950,
            'quality' => 90
        ];
        $conv = new Converter;
        $conv->source(url('/poster/campaign/covid'))->toJpg($options)->download('covid.jpg');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function show(Poster $poster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function edit(Poster $poster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poster $poster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poster $poster)
    {
        //
    }
}
