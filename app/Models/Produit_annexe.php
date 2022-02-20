<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit_annexe extends Model
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
        "Nbre_Clients_Bénéficaires",
        "Nbre_Transactions_Domestiques",
        "Nbre_Transactions_Domestiques_COVID",
        "Nbre_Transactions_International",
        "Nbre_CB_Annuel",
        "Nbre_CE_Annuel",
        "Solde_Stock_CE"
    ];
    protected $hidden = ['created_at','updated_at'];
}
