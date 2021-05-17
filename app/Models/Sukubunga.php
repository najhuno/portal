<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sukubunga extends Model
{
    use HasFactory;
    
    protected $table = "sukubungas";

    protected $fillable = ['id','jenis_produk','nama_produk','suku_bunga','update_by'];
}
