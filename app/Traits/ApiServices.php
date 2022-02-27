<?php 
namespace App\Traits;
use Illuminate\Support\Facades\Http;

trait ApiServices {

    protected $baseurl = "https://acgcmsreporting.azurewebsites.net";
    protected $headers = [
        'Content-Type' => 'application/json',
        'X-AMC-Id' => '001'
    ];
    public function connect() {
        $response = Http::withHeaders($this->headers)->post("$this->baseurl/auth/signin",[ 
            'username' => 'ATTAWFIK@Administrator',
            'password' => 'Pass@word1' 
        ]);
        if($response->status() == 200){
            \Auth::user()->setToken($response["token"]);
            $this->headers = [
                'Content-Type' => 'application/json',
                'X-AMC-Id' => '001',
                'Autorization'=> "bearer ".$response["token"]
            ];
            return true;
        }else{
            \Auth::user()->setToken(null);
            return $this->error("Errors",400,$response->json());
        }
    }

    public function saveAgences($agence){
        $response = Http::withHeaders($this->headers)->post("$this->baseurl/api/agences",[
            'Code_Agence'=> $agence["Code_Agence"],
            'Type_Agence'=> $agence["Type_Agence"],
            'Latitude'=> $agence["Latitude"],
            'Longitude'=> $agence["Longitude"],
            'Code_Commune'=> $agence["Code_Commune"],
            'Code_Region'=> $agence["Code_Region"],
            'Code_Province'=> $agence["Code_Region"]
        ]);
    }

    public function saveContrats($contrat){
        $response = Http::withHeaders($this->headers)->post("$this->baseurl/api/contrats",[
            "ID_Contrat" => $contrat["ID_Contrat"],
            "ID_Client" => $contrat["ID_Client"],
            "ID_Dossier_Client" => $contrat["ID_Dossier_Client"],
            "Type_Dossier_Client" => $contrat["Type_Dossier_Client"],
            "Statut_Dossier_Client" => $contrat["Statut_Dossier_Client"],
            "Code_Agence" => $contrat["Code_Agence"],
            "Portefeuille_Agent" => $contrat["Portefeuille_Agent"],
            "Activite" => $contrat["Activite"],
            "Charge_mensuelle" => $contrat["Charge_mensuelle"],
            "Duree_Pret" => $contrat["Duree_Pret"],
            "revenu_Mensuel_Net" => $contrat["revenu_Mensuel_Net"],
            "Montant" => $contrat["Montant"],
            "Type_pret" => $contrat["Type_pret"],
            "Periodicite_Remboursement" => $contrat["Periodicite_Remboursement"],
            "Garantie" => $contrat["Garantie"],
            "Periode_Grace" => $contrat["Periode_Grace"],
            "Taux_Interet_Accorde" => $contrat["Taux_Interet_Accorde"],
            "Date_Decaissement" => $contrat["Date_Decaissement"],
            "Date_Premier_Rembourssement" => $contrat["Date_Premier_Rembourssement"],
            "date_Dernier_Rembourssement" => $contrat["date_Dernier_Rembourssement"],
            "Encours" => $contrat["Encours"],
            "Nombre_Jours_Retards" => $contrat["Nombre_Jours_Retards"],
            "Creance_Abandon" => $contrat["Creance_Abandon"],
            "Montant_Radiation" => $contrat["Montant_Radiation"]
        ]);
    }

    public function saveTiers($tier){
        $response = Http::withHeaders($this->headers)->post("$this->baseurl/api/tiers",[
            "ID_CLIENT" => $tier["ID_CLIENT"],
            "STATUT" => $tier["STATUT"],
            "STATUT_MARITAL" => $tier["STATUT_MARITAL"],
            "NIVEAU_ETUDE" => $tier["NIVEAU_ETUDE"],
            "PROFESSION" => $tier["PROFESSION"],
            "SEXE" => $tier["SEXE"],
            "ANNEE_NAISSANCE" => $tier["ANNEE_NAISSANCE"],
            "NOMBRE_PERSONNE_CHARGE" => $tier["NOMBRE_PERSONNE_CHARGE"]
        ]);
    }

    public function saveAmcs($tier){
        $response = Http::withHeaders($this->headers)->post("$this->baseurl/api/amc",[
            'Amc_Nom' => $tier["Amc_Nom"],
            'Effectif_total' => $tier["Effectif_total"],
            'Charges_globales' => $tier["Charges_globales"],
            'Effectif_siège' => $tier["Effectif_siège"],
            'Effectif_terrain' => $tier["Effectif_terrain"],
            'Nbre_agences_rural' => $tier["Nbre_agences_rural"],
            'Nbre_agences_urbain' => $tier["Nbre_agences_urbain"],
            'Nbre_guichets_mobiles_urbain' => $tier["Nbre_guichets_mobiles_urbain"],
            'Nbre_guichets_mobiles_rural' => $tier["Nbre_guichets_mobiles_rural"]
        ]);
    }

    public function saveProduitAnnexes($value){
        $response = Http::withHeaders($this->headers)->post("$this->baseurl/api/produitannexes",[
            "Nbre_Clients_Bénéficaires" => $value["Nbre_Clients_Bénéficaires"],
            "Nbre_Transactions_Domestiques" => $value["Nbre_Transactions_Domestiques"],
            "Nbre_Transactions_Domestiques_COVID" => $value["Nbre_Transactions_Domestiques_COVID"],
            "Nbre_Transactions_International" => $value["Nbre_Transactions_International"],
            "Nbre_CB_Annuel" => $value["Nbre_CB_Annuel"],
            "Nbre_CE_Annuel" => $value["Nbre_CE_Annuel"],
            "Solde_Stock_CE" => $value["Solde_Stock_CE"]
        ]);
    }
}

?>