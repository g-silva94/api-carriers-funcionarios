<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model {

    public $timestamps = false;
    protected $fillable = ['id', 'nome', 'sobrenome', 'idade', 'sexo'];

}