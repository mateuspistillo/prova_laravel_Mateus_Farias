<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certidao extends Model
{
    

    protected $fillable = [
        'tipoCertidao', 'nmEnvolvido1', 'nmEnvolvido2', 'dtCertidao'
    ];

    //protected $table = 'tabeliaos';
}

