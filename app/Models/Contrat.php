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
        "Charge_Mensuelle",
        "Duree_Pret",
        "Revenu_Mensuel_Net",
        "Montant",
        "Type_Pret",
        "Periodicite_Remboursement",
        "Garantie",
        "Periode_Grace",
        "Taux_Interet_Accorde",
        "Date_Decaissement",
        "Date_Premier_Remboursement",
        "Date_Dernier_Remboursement",
        "Encours",
        "Nombre_Jours_Retards",
        "Creance_Abandon",
        "Montant_Radiation",
        "published"
    ];
    protected $hidden = ['created_at','updated_at'];
}
