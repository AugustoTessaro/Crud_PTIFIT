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
        'aluno_id'
    ];

    public function aluno(){
        return $this->belongsTo(Alunos::class, 'aluno_id'); 
    }    

}
