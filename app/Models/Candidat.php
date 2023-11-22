<?php

namespace App\Models;

use App\Models\Electeur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidat extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'dateNaissance',
        'parti',
        'photo_profile'
    ];

    public function electeur()
    {
       return $this-­>hasMany(Electeur::class);
    }
}
