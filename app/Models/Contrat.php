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
        "ID_Client",
        "TYPE_DOSSIER_CLIENT",
        "ID_DOSSIER_CLIENT",
        "ID_CONTRAT",
        "TYPE_PRET",
        "CODE_AGENCE",
        "PORTEFEUILLE_AGENT",
        "ACTIVITE",
        "MONTANT",
        "CHARGE_MENSUELLE",
        "DUREE_PRET",
        "REVENU_MENSUEL_NET",
        "PERIODICITE_REMBOURSEMENT",
        "GARANTIE",
        "PERIODE_GRACE",
        "TAUX_INTERET_ACCORDE",
        "DATE_DECAISSEMENT",
        "DATE_PREMIER_REMBOURSEMENT",
        "DATE_DERNIER_REMBOURSEMENT",
        "ENCOURS",
        "CREANCE_ABANDON",
        "STATUT_DOSSIER_Client",
        "RETARD_JOURS",
        "MONTANT_RADIATION",
        'published'
    ];
    protected $hidden = ['created_at','updated_at'];
}
