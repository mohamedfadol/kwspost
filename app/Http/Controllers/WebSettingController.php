<?php

namespace App\Http\Controllers;

use App\Models\Kwspost;
use Illuminate\Http\Request;

class WebSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if ( session('success')){
            toast(session('success'),'success');
        }
        $Kwspost = Kwspost::orderBy('id','desc')->get();
        return view('Kwspost.index')->with(['Kwspost' => $Kwspost]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Kwspost = Kwspost::orderBy('id','desc')->get();
        return view('Kwspost.create')->with(['Kwspost' => $Kwspost]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kwspost  $kwspost
     * @return \Illuminate\Http\Response
     */
    public function show(Kwspost $kwspost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kwspost  $kwspost
     * @return \Illuminate\Http\Response
     */
    public function edit(Kwspost $kwspost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kwspost  $kwspost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kwspost $kwspost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kwspost  $kwspost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kwspost $kwspost)
    {
        //
    }
}
