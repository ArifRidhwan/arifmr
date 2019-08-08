<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kompetensi_keahlian extends Model
{
    public function bidangstudi()
    {
        return $this->belongsTo('App\bidang_studi', 'bidang_id');
    }
    public function guru()
    {
        return $this->hasMany('App\guru', 'kompetensi_id');
    }
    public function standarkomp()
    {
        return $this->hasMany('App\standar_kompentesi', 'kompetensi_id');
    }
    public function siswa()
    {
        return $this->hasMany('App\siswa', 'kompetensi_id');
    }
}
