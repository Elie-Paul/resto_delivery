<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [] ;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'prenom',
        'adresse',
        'email'
    ];

    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }


}
