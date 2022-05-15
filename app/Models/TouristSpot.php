<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TouristSpot extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'important_informations',
        'timetable',
        'paid',
        'value',
        'cities_id'
    ];

    public function cities()
    {
        //Representante pertence a uma cidade.
        return $this->belongsTo(City::class);
    }

    //Relacionamento (N-N) cria a função no plural.
    public function categories()
    {
        //Pertence a muitas categorias.
        return $this->belongsToMany(Category::class, "category_tourist_spot", "tourist_spot_id", "category_id")->withTimestamps();
    }

    public function images()
    {
        //Ponto turísticos pode ter uma ou mais imagens (1-N).
        return $this->hasMany(Image::class);
    }
}
