<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sepultamento extends Model
{
    protected $table = 'sepultamento';
    protected $fillable  = ['localizacao','data_sepultamento','hora_sepultamento','nome_falecido','responsavel'];
}
