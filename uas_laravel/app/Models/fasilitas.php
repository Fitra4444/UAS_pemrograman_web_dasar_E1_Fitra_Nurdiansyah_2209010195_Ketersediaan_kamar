<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model
{
    use HasFactory;

    protected $fillable = [
        'fasilitas_diterima',
        'level_id'
    ];

    public function level()
    {
        return $this->belongsTo(Levels::class);
    }
}
