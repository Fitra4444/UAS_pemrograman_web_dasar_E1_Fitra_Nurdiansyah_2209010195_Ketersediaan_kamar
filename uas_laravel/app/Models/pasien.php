<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'tanggalmasuk',
        'tanggalkeluar_out',
        'no_kamar',
        'namapemesan',
        'email',
        'nohandphone',
        'kamar_id'
    ];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }
}
