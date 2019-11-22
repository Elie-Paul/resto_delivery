<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessHours extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'jours',
        'open_time',
        'close_time'
    ];

    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class)->using('App\BusinessHours_Restaurant')
                                                        ->withPivot([
                                                            'restaurant_id',
                                                            'business_hours_id'
                                                        ]);
    }
}
