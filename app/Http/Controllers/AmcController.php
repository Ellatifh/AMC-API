<?php

namespace App\Http\Controllers;

use App\Models\Amc;
use App\Traits\ApiResponser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AmcController extends Controller
{
    use ApiResponser;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('amcs')->get();
        return $this->success([
            "amc" => $data
        ]);
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
     * @param  \App\Models\Amc  $amc
     * @return \Illuminate\Http\Response
     */
    public function show(Amc $amc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Amc  $amc
     * @return \Illuminate\Http\Response
     */
    public function edit(Amc $amc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Amc  $amc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Amc $amc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Amc  $amc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Amc $amc)
    {
        //
    }
}
