<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContatoSite extends Model
{
    protected $fillable = ['nome','telefone','email','mensagem'];
}
