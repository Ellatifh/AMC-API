<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'agences';

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
        "Code_Agence",
        "Type_Agence",
        "Latitude",
        "Longitude",
        "Code_Commune",
        "Code_Region",
        "Code_Province",
        "Effectif_Siege",
        "Effectif_Terrain",
        "Effectif_Total",
        'published'
    ];
    protected $hidden = ['id','created_at','updated_at'];
}
