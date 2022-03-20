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
        "ID_Client",
        "Statut",
        "Statut_Marital",
        "Niveau_Etude",
        "Profession",
        "Sexe",
        "Annee_Naissance",
        "Nombre_Personnes_Charge",
        'published'
    ];

    protected $hidden = ['created_at','updated_at'];
}
