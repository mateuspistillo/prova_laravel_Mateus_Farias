<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $fillable = [
        'tipoContrato', 'nmEnvolvido1', 'nmEnvolvido2', 'dtContrato', 'vlContrato'
    ];
}
