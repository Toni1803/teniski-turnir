<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mec extends Model
{
    protected $table = 'mecevi';
    use HasFactory;

    public function turnir()
    {
        return $this->belongsTo(Turnir::class,'id_turniri');
    }
}
