<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class modelAgenda extends Model
{
    use HasFactory;//Fatoração - Dividir
    protected $table = 'registro';//nome da tabela do banco de dados
}//Coloco aoenas a tabela do banco de dados
