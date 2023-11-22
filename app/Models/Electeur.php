<?php

namespace App\Models;

use App\Models\Candidat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Electeur extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function candidat()
    {
        return $this->belongsTo(Candidat::class);
    }

    
}
