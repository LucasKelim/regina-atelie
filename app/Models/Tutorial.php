<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    protected $fillable = [
        'title',
        'content'
    ];

    public function crochets()
    {
        return $this->belongsToMany(Crochet::class);
    }
}
