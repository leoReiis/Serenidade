<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sepultamento extends Model
{
    protected $fillable  = ['localizacao','data_sepultamento','hora_sepultamento','nome_falecido','responsavel'];
}
