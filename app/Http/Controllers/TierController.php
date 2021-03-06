<?php

namespace App\Http\Controllers;

use App\Models\Tier;
use App\Traits\ApiResponser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TierController extends Controller
{
    use ApiResponser;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tier::get();
        return $this->success([
            "tiers" => $data
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
     * @param  \App\Models\Tier  $tier
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Tier::where('id',$id)->first();
        return $this->success(["tiers"=>$data]);
    }
    public function publish()
    {
        $data = Tier::where("published", false)->get([
            "ID_Client",
            "Statut",
            "Statut_Marital",
            "Niveau_Etude",
            "Profession",
            "Sexe",
            "Annee_Naissance",
            "Nombre_Personnes_Charge"
        ]);
        if(\Auth::user()->externalToken == null){
            $isconnected = $this->connect(); 
            if($isconnected !== true){
                return $isconnected;
            }
        }
        $nonInserted = [];
        $Inserted = [];
        foreach ($data->chunk(5) as $value) {
            foreach ($value as $item) {
                $result = $this->saveTiers($item);
                if($result == 200){
                    Tier::find($item['id'])->update(['published' => 1]);
                    array_push($Inserted,$agence);
                }else{
                    array_push($nonInserted,$result);
                }
            }
        }
        $jsonToshow = json_encode([
            "data to be published"=> count($data),
            "published"=>count($Inserted),
            "Errors"=>$nonInserted
        ]);
        if($jsonToshow == ""){
            dd($nonInserted);
        }else{
            echo $jsonToshow;
        }    
     }
}
