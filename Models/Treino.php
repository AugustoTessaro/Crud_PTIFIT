<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treino extends Model
{
    use HasFactory;

    protected $table = 'treino';

    protected $fillable = [
        'init_date',
        'end_date',
        'name',
        'description',
        'id_aluno'
    ];

    public function aluno(){
        return $this->belongsTo(Alunos::class, 'id_aluno'); 
    }    

}
