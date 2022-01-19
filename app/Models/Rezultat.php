<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rezultat extends Model
{
    protected $table = 'rezultati';
    use HasFactory;

    public function turniri()
    {
        return $this->hasMany(Turnir::class);
    }
}
