<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercicio extends Model
{
    use HasFactory;

    protected $table = 'exercicio';

    protected $fillable = [
        'repetitions',
        'sets',
        'weight',
        'id_tipo_exercicio',
        'id_treino'
    ];

    public function treino(){
        return $this->belongsTo(Treino::class, 'id_treino'); 
    }    

    public function tipo_exercicio(){
        return $this->belongsTo(TipoExercicio::class, 'id_tipo_exercicio'); 
    }    
}
