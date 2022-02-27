<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Traits\ApiResponser;
use App\Traits\ApiServices;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgenceController extends Controller
{
    use ApiResponser,ApiServices;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Agence::get();
        return $this->success([
            "agences" => $data
        ]);
    }

    public function publish()
    {
        $data = Agence::where("published", false)->get(['Code_Agence','Type_Agence','Latitude','Longitude','Code_Commune','Code_Region','Code_Province']);
        if(\Auth::user()->externalToken == null){
            $isconnected = $this->connect(); 
            if($isconnected !== true){
                return $isconnected;
            }
        }
        foreach ($data->chunk(10) as $value) {
            $this->saveAgences($value);
            echo "record saved : ".$value;
        }        
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
     * @param  \App\Models\Agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Agence::where('id',$id)->first();
        return $this->success(["agences"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function edit(Agence $agence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agence $agence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agence  $agence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agence $agence)
    {
        //
    }
}
