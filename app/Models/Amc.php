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
        'AMC_Nom',
        'Effectif_total',
        'Charges_global',
        'Effectif_Siege',
        'Effectif_Terrain',
        'Nbre_Agences_Rural',
        'Nbre_Agences_Urbain',
        'Nbre_Guichets_Mobiles_Urbain',
        'Nbre_Guichets_Mobiles_Rural',
        'published'
    ];

    protected $hidden = ['created_at','updated_at'];
}
