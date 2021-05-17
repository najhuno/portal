<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    // use HasFactory;

    protected $table = 'pegawais';
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


}
