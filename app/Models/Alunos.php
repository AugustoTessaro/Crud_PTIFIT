<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dateBirth',
        'CPF',
        'RG',
        'phone',
        'id_endereco',
        'id_user'
    ];    

    public function endereco(){
        return $this->belongsTo(Endereco::class, 'id_endereco'); 
    }    

    public function user(){
        return $this->belongsTo(User::class, 'id_user'); 
    }    
}
