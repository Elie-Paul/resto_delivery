<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuisine extends Model
{
    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'libelle'
    ];

    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class)->using('App\Cuisine_Restaurant')
                                              ->withPivot([
                                                  'restaurant_id',
                                                  'cuisine_id',
                                              ]);
    }
}
