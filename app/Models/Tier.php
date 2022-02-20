<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tier extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tiers';

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
        "ID_CLIENT",
        "STATUT",
        "STATUT_MARITAL",
        "NIVEAU_ETUDE",
        "PROFESSION",
        "SEXE",
        "ANNEE_NAISSANCE",
        "NOMBRE_PERSONNE_CHARGE"
    ];

    protected $hidden = ['created_at','updated_at'];
}
