<?php

namespace App\Models;



class Endereço extends RModel
{
    protected $table = "enderecos";
    protected $fillable = ['logadouro', 'numero', 'cep','cidade', 'estado'];
}
