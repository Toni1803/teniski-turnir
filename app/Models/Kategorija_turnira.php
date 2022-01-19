<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategorija_turnira extends Model
{
    protected $table = 'kategorije_turnira';
    use HasFactory;

    public function turniri()
    {
        return $this->hasMany(Turnir::class);
    }
}
