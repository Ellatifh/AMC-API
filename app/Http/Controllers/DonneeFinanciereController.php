<?php

namespace App\Http\Controllers;
use App\Models\DonneeFinanciere;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class DonneeFinanciereController extends Controller
{
    use ApiResponser;
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit_annexe  $produit_annexe
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit_annexe $produit_annexe)
    {
        //
    }
}
