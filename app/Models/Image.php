<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public function tourist_spots()
    {
        //Imagem pode ter pontos turísticos.
        return $this->belongsTo(TouristSpot::class);
    }
}
