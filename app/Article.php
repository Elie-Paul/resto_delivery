<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    protected $fillable = [
        'nom',
        'description',
        'prix',
        'taille_a',
        'taille_b',
        'taille_c',
        'prix_a',
        'prix_b',
        'prix_c',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
