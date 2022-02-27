<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amc extends Model
{
    use HasFactory;

        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'amcs';

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
        'Amc_Nom',
        'Effectif_total',
        'Charges_globales',
        'Effectif_siège',
        'Effectif_terrain',
        'Nbre_agences_rural',
        'Nbre_agences_urbain',
        'Nbre_guichets_mobiles_urbain',
        'Nbre_guichets_mobiles_rural',
        'published'
    ];

    protected $hidden = ['created_at','updated_at'];
}
