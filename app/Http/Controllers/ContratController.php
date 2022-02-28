<?php

namespace App\Http\Controllers;

use App\Models\Contrat;
use App\Traits\ApiResponser;
use App\Traits\ApiServices;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContratController extends Controller
{
    use ApiResponser,ApiServices;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Contrat::get();
        return $this->success([
            "contrats" => $data
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
     * @param  \App\Models\Contrat  $contrat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Contrat::where('id',$id)->first();
        return $this->success(["contrats"=>$data]);
    }

    public function publish()
    {
        $data = Contrat::where("published", false)->get([
            "ID_Contrat",
            "ID_Client",
            "ID_Dossier_Client",
            "Type_Dossier_Client",
            "Statut_Dossier_Client",
            "Code_Agence",
            "Portefeuille_Agent",
            "Activite",
            "Charge_mensuelle",
            "Duree_Pret",
            "revenu_Mensuel_Net",
            "Montant",
            "Type_pret",
            "Periodicite_Remboursement",
            "Garantie",
            "Periode_Grace",
            "Taux_Interet_Accorde",
            "Date_Decaissement",
            "Date_Premier_Rembourssement",
            "date_Dernier_Rembourssement",
            "Encours",
            "Nombre_Jours_Retards",
            "Creance_Abandon",
            "Montant_Radiation"
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
                $result = $this->saveContrats($item);
                if($result == 200){
                    Contrat::find($item['id'])->update(['published' => 1]);
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
