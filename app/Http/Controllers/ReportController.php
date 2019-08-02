<?php

namespace App\Http\Controllers;

use App\Report;
use App\User;
use Illuminate\Http\Request;
use Corcel\Model\User as Corcel;

class ReportController extends Controller
{

    //Authentication
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Report $report, Request $request)
    {

        return view('reports.index', compact('reports','request'));
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
     * @param  \App\Reportort  $reportort
     * @return \Illuminate\Http\Response
     */
     public function show(Report $report, Request $request)
    {
         $year = $request->input('year');
        $month = $request->input('month');
        $reports = (new Report)->getSale($year, $month);
        $user = Corcel::find(auth()->id())->display_name;
        return view('reports.show', compact('reports','month','year','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reportort  $reportort
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reportort  $reportort
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reportort  $reportort
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }
}
