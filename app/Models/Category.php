<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    //Relacionamento (N-N) cria a função no plural.
    public function tourist_spots()
    {
        //Pertence a muitos pontos turísticos.
        return $this->belongsToMany(TouristSpot::class, "tourist_spots", "tourist_spot_id", "category_id")->withTimestamps();
    }
}
