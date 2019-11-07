<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'tel1',
        'tel2',
        'ville',
        'code_postal',
        'num_rue',
    ];

    public function cuisines()
    {
        return $this->belongsToMany(Cuisine::class);
    }
}
