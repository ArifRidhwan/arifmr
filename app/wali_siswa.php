<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wali_siswa extends Model

{
    public function siswa()
    {
        return $this->belongsTo('App\siswa', 'siswa_id');
    }
}
