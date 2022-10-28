<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoExercicio extends Model
{
    use HasFactory;

    protected $table = 'tipo_exercicio';

    protected $fillable = [
        'name',
        'description',
        'gif_link',   
        'id_equipamento'     
    ];

    public function equipamento(){
        return $this->belongsTo(Equipamento::class, 'id_equipamento'); 
    }    

}
