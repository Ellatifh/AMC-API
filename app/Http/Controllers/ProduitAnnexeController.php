<?php

namespace App\Http\Controllers;

use App\Models\Produit_annexe;
use App\Traits\ApiResponser;
use App\Traits\ApiServices;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduitAnnexeController extends Controller
{
    use ApiResponser,ApiServices;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Produit_annexe::get();
        return $this->success([
            "produit_annexes" => $data
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
     * @param  \App\Models\Produit_annexe  $produit_annexe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Produit_annexe::where('id',$id)->first();
        return $this->success(["produit_annexes"=>$data]);
    }

    public function publish()
    {
        $data = Produit_annexe::where("published", false)->get([
            "Produit_Annexe_Id",
            "Total_Bilan",
            "Fonds_Propres",
            "Dettes_CT",
            "Dettes_MLT",
            "Produits_Operations_Clienteles",
            "Charges_Exploitation",
            "Charges_Financieres",
            "Dotation_Provisions",
            "Resultat_Periode"
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
                $result = $this->saveProduitAnnexes($item);
                if($result == 200){
                    Produit_annexe::find($item['id'])->update(['published' => 1]);
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
