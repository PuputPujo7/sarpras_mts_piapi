<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Survey extends Model
{
    use HasFactory;

    protected $casts = [
        'answer_options' => 'array'
    ];

    protected $fillable = [
        'pertanyaan_id',
        'answer_options'
    ];

    public function pertanyaan(): BelongsTo {
    return $this->belongsTo(Pertanyaan::class, 'pertanyaan_id');
    }

}
