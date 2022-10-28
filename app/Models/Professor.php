<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function endereco(){
        return $this->belongsTo(Endereco::class, 'id_endereco'); 
    }  
}
