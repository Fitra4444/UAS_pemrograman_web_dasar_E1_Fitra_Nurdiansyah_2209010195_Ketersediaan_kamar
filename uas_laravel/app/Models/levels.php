<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class levels extends Model
{
    use HasFactory;

     // Tentukan kolom yang bisa diisi melalui aplikasi
     protected $fillable = ['level_name'];

     // Definisikan relasi dengan model Fasilitas
     public function fasilitas()
     {
         return $this->hasMany(Fasilitas::class);
     }
}
