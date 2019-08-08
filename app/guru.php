<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    public function kompkeahlian()
    {
        return $this->belongsTo('App\kompentensi_keahlian', 'kompetensi_id');
    }
    public function nilai()
    {
        return $this->hasMany('App\nilai', 'guru_id');
    }
}
