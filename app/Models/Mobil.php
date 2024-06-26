<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $fillable = [
        'merek',
        'model',
        'no_plat',
        'tarif_per_hari',
        'disewa'
    ];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }
}
