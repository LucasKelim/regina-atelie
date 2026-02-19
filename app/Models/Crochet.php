<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crochet extends Model
{
    protected $fillable = [
        'name',
        'crochet_category_id',  
    ];

    public function category()
    {
        return $this->belongsTo(CrochetCategory::class);
    }

    public function tutorials()
    {
        return $this->belongsToMany(Tutorial::class);
    }
}
