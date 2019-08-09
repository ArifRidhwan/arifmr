<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class standar_kompetensi extends Model
{
    public function kompkeahlian()
    {
        return $this->belongsTo('App\kompetensi_keahlian', 'kompetensi_id');
    }
    public function nilai()
    {
        return $this->hasMany('App\nilai', 'sk_id');
    }
}
