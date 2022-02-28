<?php

namespace App\Http\Controllers;
use App\Models\DonneeFinanciere;
use App\Traits\ApiResponser;
use App\Traits\ApiServices;
use Illuminate\Http\Request;

class DonneeFinanciereController extends Controller
{
    use ApiResponser,ApiServices;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DonneeFinanciere::get();
        return $this->success([
            "donnee_financieres" => $data
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit_annexe  $produit_annexe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DonneeFinanciere::where('id',$id)->first();
        return $this->success(["donnee_financieres"=>$data]);
    }

    public function publish()
    {
        $data = DonneeFinanciere::where("published", false)->get([
            "Nbre_Clients_Beneficiaires",
            "Nbre_Transactions_Domestiques",
            "Nbre_Transactions_Internationales",
            "Nbre_CB_Annuel",
            "Nbre_CE_Annuel",
            "Solde_Stock_CE",
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
                $result = $this->saveDonneeFinancieres($item);
                if($result == 200){
                    DonneeFinanciere::find($item['id'])->update(['published' => 1]);
                    array_push($Inserted,$agence);
                }else{
                    array_push($nonInserted,$result);
                }
            }
        }
        echo json_encode(["data to be published"=>count($data),"published"=>count($Inserted),"Errors"=>$nonInserted]);    
    }
}
