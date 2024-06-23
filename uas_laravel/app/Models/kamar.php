<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    use HasFactory;

    protected $fillable = [
        'level_id', 
        'nomor_ruangan', 
        'is_available'
    ];

    public function level()
    {
        return $this->belongsTo(Levels::class);
    }
}
