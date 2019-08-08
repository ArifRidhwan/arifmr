<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    public function siswa()
    {
        return $this->belongsTo('App\siswa', 'siswa_id');
    }
    public function guru()
    {
        return $this->belongsTo('App\guru', 'guru_id');
    }
    public function standarkomp()
    {
        return $this->belongsTo('App\standar_kompetensi', 'sk_id');
    }
}
