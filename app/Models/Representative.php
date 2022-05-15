<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Representative extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'cities_id'
    ];

    public function city()
    {
        //Representante pertence a uma cidade.
        return $this->belongsTo(City::class);
    }
}
