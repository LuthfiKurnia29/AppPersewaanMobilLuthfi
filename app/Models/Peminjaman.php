<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $fillable = [
        'mobil_id',
        'user_id',
        'tanggal_mulai',
        'tanggal_selesai',
        'disetujui',
        'status_peminjaman',
        'biaya_sewa'
    ];

    public function mobil(){
        return $this->belongsTo(Mobil::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
