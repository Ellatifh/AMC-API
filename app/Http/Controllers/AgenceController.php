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
        $data = Agence::where("published", false)->get(['id','Code_Agence','Type_Agence','Latitude','Longitude','Code_Commune','Code_Region','Code_Province']);
        if(\Auth::user()->externalToken == null){
            $isconnected = $this->connect(); 
            if($isconnected !== true){
                return $isconnected;
            }
        }
        $nonInserted = [];
        $Inserted = [];
        foreach ($data->chunk(5) as $value) {
            foreach ($value as $agence) {
                $result = $this->saveAgences($agence);
                if($result == 200){
                    Agence::find($agence['id'])->update(['published' => 1]);
                    array_push($Inserted,$agence);
                }else{
                    array_push($nonInserted,$result);
                }
            }
        }
        echo json_encode(["data to be published"=>count($data),"published"=>count($Inserted),"Non Inserted"=>$nonInserted]);    
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
}
