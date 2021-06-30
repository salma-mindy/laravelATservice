<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestataire extends Model 
{

    protected $table = 'prestataires';
    public $timestamps = true;

    public function ville()
    {
        return $this->belongsTo('App\Models\Ville');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}