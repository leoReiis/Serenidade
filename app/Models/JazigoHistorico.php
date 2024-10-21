<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JazigoHistorico extends Model
{
    protected $table = 'jazigo_historico';
    protected $fillable  = ['id_jazigo','id_sepultamento'];
}
