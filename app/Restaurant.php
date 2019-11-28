<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $guarded = [] ;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'email',
        'image',
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

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function businesshours()
    {
        return $this->belongsToMany(BusinessHours::class);
    }
}
