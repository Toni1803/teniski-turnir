<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Igra extends Model
{
    protected $table = 'igre';
    use HasFactory;

    public function igrac()
    {
        return $this->belongsTo(Igrac::class,'id_igraci');
    }

    public function turnir()
    {
        return $this->belongsTo(Turnir::class,'id_turniri');
    }

}
