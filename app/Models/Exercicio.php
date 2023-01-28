<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Exercicio extends Model
{
    use HasFactory;

    protected $table = 'exercicio';

    protected $fillable = [
        'repetitions',
        'sets',
        'weight',
        'tipo_exercicio_id',
        'treino_id'
    ];


    public function treino(): BelongsTo {
        return $this->belongsTo(Treino::class);
    }

    public function tipo_exercicio(): BelongsTo {
        return $this->belongsTo(TipoExercicio::class);
    }
}
