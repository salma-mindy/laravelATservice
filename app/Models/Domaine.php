<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Domaine extends Model 
{

    protected $table = 'domaines';
    public $timestamps = true;

    public function offre_id()
    {
        return $this->hasMany('App\Models\Offre');
    }

}