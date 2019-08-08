<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wali_siswa extends Model

{
    public function kompkeahlian()
    {
    return $this->hasMany('App\kompetensi_keahlian', 'bidang_id');
    }
}
