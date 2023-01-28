<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Alunos extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dateBirth',
        'age',
        'CPF',
        'RG',
        'phone',
        'id_endereco',
        'id_user'
    ];    

    

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function endereco(): BelongsTo {
        return $this->belongsTo(Endereco::class);
    }
}
