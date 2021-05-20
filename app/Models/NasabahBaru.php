<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NasabahBaru extends Model
{
    use HasFactory;

    protected $table = "nasabah_barus";

    protected $fillable = ['namalengkap','nik','nohp','email','alamat','pengajuan','cabang'];


}
