<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'data_barangs';
    protected $casts = [
        'gambar' => 'array'
    ];
    protected $fillable = [
        'id',
        'user_id',
        'pengguna',
        'nama_barang',
        'kondisi',
        'jumlah',
        'nomor_aset',
        'ruang',
        'gedung',
        'gambar',

    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
