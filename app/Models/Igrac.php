<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Igrac extends Model
{
    protected $table = 'igraci';
    use HasFactory;

    public function igre()
    {
        return $this->hasMany(Igra::class);
    }

}
