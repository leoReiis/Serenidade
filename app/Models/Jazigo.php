<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jazigo extends Model
{
    protected $table = 'jazigo';
    protected $fillable  = ['id_localizacao','id_tamanho','id_sepultado','status'];

    public function rules(): array{
        return ['id_sepultado' => 'required|unique:jazigo'];
    }

    public function feedback(): array{
        return ['required' => 'O campo:attribute é obrigatório.'];
    }
}

