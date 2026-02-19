<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CrochetCategory extends Model
{
    protected $fillable = [
        'name'
    ];

    public function crochets()
    {
        return $this->hasMany(Crochet::class);
    }
}
