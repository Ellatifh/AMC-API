<?php

namespace App\Http\Controllers;

use App\Models\Produit_annexe;
use App\Traits\ApiResponser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduitAnnexeController extends Controller
{
    use ApiResponser;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('produit_annexes')->get();
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
    public function show(Produit_annexe $produit_annexe)
    {
        //
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit_annexe  $produit_annexe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit_annexe $produit_annexe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit_annexe  $produit_annexe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit_annexe $produit_annexe)
    {
        //
    }
}
