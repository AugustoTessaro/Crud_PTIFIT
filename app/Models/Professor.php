<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Professor extends Model
{
    use HasFactory;
    protected $table = 'professor';

    protected $fillable = [
        'name',
        'email',
        'CPF',
        'phone',
        'professional_qualification',
    ];

    public function endereco(): BelongsTo {
        return $this->belongsTo(Endereco::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
