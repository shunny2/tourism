<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function representative()
    {
        //Relacionamento 1 para 1 (Cidade tem 1 Representante).
        return $this->hasOne(Representative::class);
    }

    public function tourist_spot()
    {
        //Relacionamento 1 para 1 (Cidade tem 1 Ponto turístico).
        return $this->hasOne(TouristSpot::class);
    }
}
