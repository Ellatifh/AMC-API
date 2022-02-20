<?php

namespace App\Http\Controllers;

use App\Models\Amc;
use App\Traits\ApiResponser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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
        $data = AMC::get();
        return $this->success([
            "amc" => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'Amc_Nom' => 'required|string',
            'Effectif_total' => 'required|integer',
            'Charges_globales' => 'required|integer',
            'Effectif_siège' => 'required|integer',
            'Effectif_terrain' => 'required|integer',
            'Nbre_agences_rural' => 'required|integer',
            'Nbre_agences_urbain' => 'required|integer',
            'Nbre_guichets_mobiles_urbain' => 'required|integer',
            'Nbre_guichets_mobiles_rural' => 'required|integer'
        ]);

        if($validation->fails()) {
            return $this->error("invalid parametres",400,$validation->errors());
        }

        $attr = $request->All();

        $row = AMC::create([
            'Amc_Nom' => $attr['Amc_Nom'],
            'Effectif_total' => $attr['Effectif_total'],
            'Charges_globales' => $attr['Charges_globales'],
            'Effectif_siège' => $attr['Effectif_siège'],
            'Effectif_terrain' => $attr['Effectif_terrain'],
            'Nbre_agences_rural' => $attr['Nbre_agences_rural'],
            'Nbre_agences_urbain' => $attr['Nbre_agences_urbain'],
            'Nbre_guichets_mobiles_urbain' => $attr['Nbre_guichets_mobiles_urbain'],
            'Nbre_guichets_mobiles_rural' => $attr['Nbre_guichets_mobiles_rural']
        ]);

        return $this->success([
            'New record' => $row
        ],"saved successfully",200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Amc  $amc
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = AMC::where('id',$id)->first();
        return $this->success(["amc"=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Amc  $amc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $row = AMC::where('id',$id)->first();
        if($row === null){
            return $this->error("no record found",200,[]);
        }
        return json_encode($request);
        $validation = Validator::make($request->all(),[
            'Amc_Nom' => 'required|string',
            'Effectif_total' => 'required|integer',
            'Charges_globales' => 'required|integer',
            'Effectif_siège' => 'required|integer',
            'Effectif_terrain' => 'required|integer',
            'Nbre_agences_rural' => 'required|integer',
            'Nbre_agences_urbain' => 'required|integer',
            'Nbre_guichets_mobiles_urbain' => 'required|integer',
            'Nbre_guichets_mobiles_rural' => 'required|integer'
        ]);

        if($validation->fails()) {
            return $this->error("invalid parametres",400,$validation->errors());
        }

        $attr = $request->All();

        $row->update([
            'Amc_Nom' => $attr['Amc_Nom'],
            'Effectif_total' => $attr['Effectif_total'],
            'Charges_globales' => $attr['Charges_globales'],
            'Effectif_siège' => $attr['Effectif_siège'],
            'Effectif_terrain' => $attr['Effectif_terrain'],
            'Nbre_agences_rural' => $attr['Nbre_agences_rural'],
            'Nbre_agences_urbain' => $attr['Nbre_agences_urbain'],
            'Nbre_guichets_mobiles_urbain' => $attr['Nbre_guichets_mobiles_urbain'],
            'Nbre_guichets_mobiles_rural' => $attr['Nbre_guichets_mobiles_rural']
        ]);

        return $this->success([
            'record' => $row
        ],"updated successfully",200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Amc  $amc
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(AMC::where('id',$id)->first() === null){
            return $this->error("no record found",200,[]);
        }
        $row = AMC::where('id',$id)->delete();
        return $this->success([
            'record' => $row
        ],"deleted successfully",200);
    }
}
