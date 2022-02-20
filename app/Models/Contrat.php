<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;

           /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contrats';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
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
    ];
}
