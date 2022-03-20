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
    protected $table = 'produit_annexes';

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
        "Produit_Annexe_Id",
        "Total_Bilan",
        "Fonds_Propres",
        "Dettes_CT",
        "Dettes_MLT",
        "Produits_Operations_Clienteles",
        "Charges_Exploitation",
        "Charges_Financieres",
        "Dotation_Provisions",
        "Resultat_Periode",
        'published'
    ];
    protected $hidden = ['created_at','updated_at'];
}
