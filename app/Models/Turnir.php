<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turnir extends Model
{
    protected $table = 'turniri';
    use HasFactory;

    public function kategorija_turnira()
    {
       return $this->belongsTo(Kategorija_turnira::class, 'id_kategorije_turnira');
    }

    public function rezultat()
    {
       return $this->belongsTo(Rezultat::class, 'id_rezultati');
    }

    public function mecevi()
    {
        return $this->hasMany(Mec::class);
    }

    public function igre()
    {
        return $this->hasMany(Igra::class);
    }

}
